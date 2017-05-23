<?php

namespace App\Http\Controllers;

use App\Service\Event;
use App\Service\News;
use App\Service\Template;
use App\Service\Video;
use Illuminate\Http\Request;

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
     * FrontEndController constructor.
     * @param News $news
     * @param Event $event
     * @param Video $video
     * @param Template $template
     */
    public function __construct(News $news, Event $event, Video $video, Template $template)
    {
        $this->news = $news;
        $this->event = $event;
        $this->video = $video;
        $this->template = $template;
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

    public function video()
    {
        $data['pageTitle'] = 'Video';
        $data['pageClass'] = 'class="video"';
        $data['navActiveVid'] = 'class="uk-active"';
        return view('frontend.video', $data);
    }

    public function berita()
    {
        $newsQuery = $this->news->getList();
        $eventQuery = $this->event->getList();
        $data['news'] = $newsQuery->orderBy('publish_at', 'desc')->get();
        $data['events'] = $eventQuery->orderBy('publish_at', 'desc')->get();
        $data['pageTitle'] = 'Berita &amp; Acara';
        $data['pageClass'] = 'class="news"';
        $data['navActiveNews'] = 'class="uk-active"';
        return view('frontend.berita', $data);
    }

    public function beritaDetail($slug)
    {
        $data['news'] = $this->news->getList(['slug' => $slug])->first();
        $data['pageTitle'] = 'Judul Berita/Acara';
        $data['pageClass'] = 'class="news"';
        $data['navActiveNews'] = 'class="uk-active"';
        return view('frontend.berita-detail', $data);
    }

    public function seruMewarnai()
    {
        $templateQuery = $this->template->getList();
        $data['templates'] = $templateQuery->paginate(4);
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
}
