<?php

namespace App\Http\Controllers;

use App\Http\Requests\UploadColoringImage;
use App\Models\ColoringImage;
use App\Service\Media;
use Illuminate\Http\Request;
use File;
use Image;

class ColoringController extends Controller
{
    /**
     * @var Media
     */
    private $media;

    /**
     * ColoringController constructor.
     */
    public function __construct(Media $media)
    {
        $this->media = $media;
    }

    public function ajaxImageUploadPost(UploadColoringImage $request)
    {
        // check the folder
        $title = $request->input('title');
        $file = $request->file('file');
        $folder = 'uploads/coloring-images/';
        try {
            if (!File::exists(public_path($folder))) {
                File::makeDirectory(public_path($folder), 0775, true, true);
            }
            // check the file
            $imageName = $this->media->getUniqueFileName($file, $folder);
            $imagePath = $folder . $imageName;
            $publicPath = public_path($imagePath);

            // save file to disk
            $image = Image::make($file);
            $image->save($publicPath);

            // save to db
            $user = auth()->user();
            $userId = $user->id;
            $userName = $user->name;
            $userEmail = $user->email;
            $userCity = $user->detail->city;
            $userAddress = $user->detail->address;
            $userBirthdate = $user->detail->birth_date;

            ColoringImage::create([
                'user_id' => $userId,
                'title' => $title,
                'file_name' => $imageName,
                'file_path' => $imagePath,
                'user_name' => $userName,
                'user_email' => $userEmail,
                'user_city' => $userCity,
                'user_address' => $userAddress,
                'user_birthdate' => $userBirthdate,
            ]);

            return response()->json(['success' => 'done']);
        } catch (\Exception $e) {
            throw $e;
        }
    }

    public function coloringPaginated()
    {
        $newsQuery = ColoringImage::query()->where('status', 1);
        $newsQuery = $newsQuery->orderBy('created_at', 'desc');
        $news = $newsQuery->paginate(9);
        $news->withPath('coloring-paginated');
        return $news->toJson();
    }
}
