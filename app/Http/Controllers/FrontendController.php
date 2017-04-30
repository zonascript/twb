<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontEndController extends Controller
{
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
        $data['pageTitle'] = 'Berita &amp; Acara';
        $data['pageClass'] = 'class="news"';
        $data['navActiveNews'] = 'class="uk-active"';
        return view('frontend.berita', $data);
    }
    public function beritaDetail()
    {
        $data['pageTitle'] = 'Judul Berita/Acara';
        $data['pageClass'] = 'class="news"';
        $data['navActiveNews'] = 'class="uk-active"';
        return view('frontend.berita-detail', $data);
    }
}
