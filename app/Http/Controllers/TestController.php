<?php

namespace App\Http\Controllers;

use App\Service\Media;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use JildertMiedema\LaravelPlupload\Facades\Plupload;
use File;
use Image;

class TestController extends Controller
{
    /**
     * @var Media
     */
    private $media;

    /**
     * TestController constructor.
     */
    public function __construct(Media $media)
    {
        $this->media = $media;
    }

    public function form()
    {
        return view('form');
    }

    public function uploadImageHandler(Request $request)
    {
        return Plupload::receive('file', function ($file) {
            return $this->saveImage($file);
        });
    }

    public function saveImage($file)
    {
        // check the folder
        $folder = 'uploads/post/';
        if (! File::exists(public_path($folder))) {
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
        $filename = pathinfo($imageName, PATHINFO_FILENAME);
        $media = $this->media->saveMedia($filename, $imageName, $imagePath);

        $result = [
            'filePath' => $imageName,
            'fullPath' => $imagePath,
            'status' => 'OK',
            'mediaId' => $media->id,
            'description' => $media->description
        ];
//        Log::warning(\GuzzleHttp\json_encode($result));
        return $result;
    }

    public function getImageForUploader()
    {
        return $this->media->getMedias()->toJson();
    }
}
