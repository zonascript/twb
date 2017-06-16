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
     * @var Product
     */
    private $product;
    /**
     * @var Promo
     */
    private $promo;

    /**
     * FrontEndController constructor.
     * @param News $news
     * @param Event $event
     * @param Video $video
     * @param Template $template
     * @param Product $product
     */
    public function __construct(
        News $news,
        Event $event,
        Video $video,
        Template $template,
        Product $product,
        Promo $promo
    )
    {
        $this->news = $news;
        $this->event = $event;
        $this->video = $video;
        $this->template = $template;
        $this->product = $product;
        $this->promo = $promo;
        $this->middleware('frontendAuth')->only(['account']);
    }

    public function home()
    {
        $data['news'] = $this->news->getList()->limit(3)->get();
        $data['promos'] = $this->promo->getList()->get();
        $data['pageTitle'] = 'Home';
        $data['metaDescription'] = config('misc.home-meta');
        $data['pageClass'] = 'class="home"';
        return view('frontend.home', $data);
    }

    public function product()
    {
        $data['products'] = $this->product->getList()->get();
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
        $data['pageTitle'] = $news->page_title;
        $data['metaDescription'] = $news->meta_description;
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
        $data['user'] = auth()->user();
        $data['pageTitle'] = 'Akun Saya';
        $data['pageClass'] = 'class="account"';
        $data['navActiveProfile'] = 'class="uk-active"';
        return view('frontend.account', $data);
    }


}
