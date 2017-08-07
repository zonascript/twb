<?php

namespace App\Http\Controllers;

use App\Http\Requests\CompleteProfile;
use App\Http\Requests\UploadCoinImage;
use App\Model\Coin;
use App\Model\User;
use App\Service\Media;
use Illuminate\Http\Request;
use File;
use Image;
use Illuminate\Support\Facades\Log;

class DuniaMainController extends Controller
{
    var $characters = [
        'twinnie' => 'Twinnie',
        'gajah' => 'Gajah',
        'bebek' => 'Bebek',
        'ikan' => 'Ikan',
        'kura' => 'Kura',
        'kupu' => 'Kupu2',
        'cokelat' => 'Cokelat',
        'strawberry' => 'Strawberry',
        'asin' => 'Asin',
        'susu' => 'Susu',
        'jagung' => 'Jagung Manis',
        'pizza' => 'Pizza',
        'sate' => 'Sate Ayam',
        'keju' => 'Keju',
        'manis' => 'Manis'
    ];
    /**
     * @var Media
     */
    private $media;

    /**
     * DuniaMainController constructor.
     */
    public function __construct(Media $media)
    {
        $this->media = $media;
    }

    public function home()
    {
        $data['pageTitle'] = 'Dunia Main';
        $data['pageClass'] = 'class="dumai"';
        return view('duniamain.home', $data);
    }

    public function album($userId)
    {
        $isUncompleteProfile = false;
        $loggedInUser = '';
        $isMyPage = false;
        if (auth()->check()) {
            $loggedInUser = auth()->user();
            if ($userId == $loggedInUser->id) {
                $isMyPage = true;
                $uDetail = $loggedInUser->detail;
                if (isset($uDetail)) {
                    if ($uDetail->mother_name == '' || $uDetail->school_name == '' || $uDetail->class_name == '' || $uDetail->address == '') {
                        $isUncompleteProfile = true;
                    }
                } else {
                    $isUncompleteProfile = true;
                }
            }
        }

        $user = User::find($userId);
        $detail = $user->detail;
        // images
        $coins = $user->coins()->where('status', 1)->get();
        $images = [];
        if (count($coins) > 0) {
            foreach ($coins as $coin) {
                $images[$coin->type][] = $coin;
            }
        }
        // dd($coins);
        $data['pageTitle'] = 'Album Dunia Main';
        $data['pageClass'] = 'class="dumai"';
        $data['user'] = $user;
        $data['loggedInUser'] = $loggedInUser;
        $data['detail'] = $detail;
        $data['images'] = $images;
        $data['characters'] = $this->characters;
        $data['uncompleteProfile'] = $isUncompleteProfile;
        $data['isMyPage'] = $isMyPage;
        // dd($data);
        return view('duniamain.album', $data);
    }

    public function completeProfile(CompleteProfile $request, $id)
    {
        //Log::warning(\GuzzleHttp\json_encode($request->all()));
        $user = User::find($id);
        $detail = $user->detail;
        $motherName = $request->has('mother_name') ? $request->input('mother_name') : '';
        $schoolName = $request->has('school_name') ? $request->input('school_name') : '';
        $className = $request->has('class_name') ? $request->input('class_name') : '';
        $address = $request->has('address') ? $request->input('address') : '';
        if (isset($detail)) {
            $detail->mother_name = $motherName;
            $detail->school_name = $schoolName;
            $detail->class_name = $className;
            $detail->address = $address;
            $detail->save();
            return 'OK';
        } else {
            $user->detail()->create([
                'mother_name' => $motherName,
                'school_name' => $schoolName,
                'class_name' => $className,
                'address' => $address
            ]);
            return 'OK';
        }

    }

    public function ajaxCoinUpload(UploadCoinImage $request)
    {
        // check the folder
        $score = $request->input('score');
        $file = $request->file('file');
        $coinType = $request->input('coin_type');
        $user = auth()->user();
        $folder = 'uploads/coin-images/';
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
            $user->coins()->create([
                'type' => $coinType,
                'file_name' => $imageName,
                'file_path' => $imagePath,
                'score' => $score,
                'status' => 0
            ]);

            return response()->json(['success' => 'done']);
        } catch (\Exception $e) {
            throw $e;
        }
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function coinIndex()
    {
        $data['pageTitle'] = 'Participant List';
        return view('admin.coins.index', $data);
    }

    public function coinDatatable()
    {
        return $this->campaign->participantsDatatable();
    }

    public function coinsPaginated()
    {
        $q = Coin::with('user.detail')
            ->where('status', 1);
        $q = $q->orderBy('created_at', 'desc');
        $result = $q->paginate(3);
        $result->withPath('coins-paginated');
        return $result->toJson();
    }

    public function term()
    {
        $data['pageTitle'] = 'Term &amp; Conditions';
        return view('duniamain.term', $data);
    }
}
