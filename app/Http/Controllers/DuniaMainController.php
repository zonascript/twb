<?php

namespace App\Http\Controllers;

use App\Http\Requests\UploadColoringImage;
use App\Models\ColoringImage;
use App\Service\Event;
use App\Service\Media;
use App\Service\News;
use App\Service\Product;
use App\Service\Promo;
use App\Service\Template;
use App\Service\Video;
use Illuminate\Http\Request;
use File;
use Illuminate\Support\Facades\Log;
use Intervention\Image\Facades\Image;

class DuniaMainController extends Controller
{
    public function home()
    {
        $data['pageTitle'] = 'Dunia Main';
        $data['pageClass'] = 'class="dumai"';
        return view('duniamain.home', $data);
    }

    public function album()
    {
        $data['pageTitle'] = 'Album Dunia Main';
        $data['pageClass'] = 'class="dumai"';
        return view('duniamain.album', $data);
    }
}
