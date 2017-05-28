<?php

namespace App\Http\Controllers;

use App\Http\Requests\UploadColoringImage;
use App\Service\Event;
use App\Service\Media;
use App\Service\News;
use App\Service\Template;
use App\Service\Video;
use Illuminate\Http\Request;
use File;
use Illuminate\Support\Facades\Log;
use Intervention\Image\Facades\Image;

class FrontEndController extends Controller
{
    /**
     * @var News
     */
    private $news;
    /**
     * @var Event
     */
    private $event;
    /**
     * @var Video
     */
    private $video;
    /**
     * @var Template
     */
    private $template;
    /**
     * @var Media
     */
    private $media;

    /**
     * FrontEndController constructor.
     * @param News $news
     * @param Event $event
     * @param Video $video
     * @param Template $template
     */
    public function __construct(News $news, Event $event, Video $video, Template $template, Media $media)
    {
        $this->news = $news;
        $this->event = $event;
        $this->video = $video;
        $this->template = $template;
        $this->media = $media;
        $this->middleware('frontendAuth')->only(['account']);
    }

    public function home()
    {
        $data['pageTitle'] = 'Home';
        $data['pageClass'] = 'class="home"';
        return view('frontend.home', $data);
    }

    public function product()
    {
        $data['pageTitle'] = 'Produk Kami';
        $data['pageClass'] = 'class="product"';
        return view('frontend.product', $data);
    }

    public function video($slug = '')
    {
        if ($slug != '') {
            $video = $this->video->getList(['slug' => $slug]);
            if ($video->exists()) {
                $video = $video->first();
            } else {
                return redirect('video');
            }
        } else {
            $video = $this->video->getList()
                ->orderBy('publish_at', 'desc')->first();
        }
        $data['video'] = $video;
        $data['pageTitle'] = 'Video';
        $data['pageClass'] = 'class="video"';
        $data['navActiveVid'] = 'class="uk-active"';
        return view('frontend.video', $data);
    }

    public function berita()
    {
        //$newsQuery = $this->news->getList();
        //$eventQuery = $this->event->getList();
        //$data['news'] = $newsQuery->orderBy('publish_at', 'desc')->get();
        //$data['events'] = $eventQuery->orderBy('publish_at', 'desc')->get();
        $data['pageTitle'] = 'Berita &amp; Acara';
        $data['pageClass'] = 'class="news"';
        $data['navActiveNews'] = 'class="uk-active"';
        return view('frontend.berita', $data);
    }

    public function beritaDetail($slug)
    {
        $news = $this->news->getList(['slug' => $slug])->first();
        $this->news->viewed($news->id);
        $data['news'] = $news;
        $data['pageTitle'] = 'Judul Berita/Acara';
        $data['pageClass'] = 'class="news"';
        $data['navActiveNews'] = 'class="uk-active"';
        return view('frontend.berita-detail', $data);
    }

    public function seruMewarnai()
    {
        $data['pageTitle'] = 'Seru Mewarnai';
        $data['pageClass'] = 'class="seru"';
        $data['navActiveColoring'] = 'class="uk-active"';
        return view('frontend.seru-mewarnai', $data);
    }

    public function account()
    {
        $data['pageTitle'] = 'My Account';
        $data['pageClass'] = 'class="account"';
        $data['navActiveProfile'] = 'class="uk-active"';
        return view('frontend.account', $data);
    }

    public function ajaxImageUploadPost(UploadColoringImage $request)
    {
        Log::warning('ajax upload ' . \GuzzleHttp\json_encode($request->all()));
//        $input = $request->all();
//        $input['image'] = time().'.'.$request->file->getClientOriginalExtension();
//        $request->image->move(public_path('images'), $input['image']);
//
//        //AjaxImage::create($input);
        // check the folder
        $title = $request->input('title');
        $file = $request->file('file');
        $folder = 'uploads/coloring-images/';
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
//        $filename = pathinfo($imageName, PATHINFO_FILENAME);
//        $media = $this->media->saveMedia($filename, $imageName, $imagePath);

        return response()->json(['success'=>'done']);
    }
}
