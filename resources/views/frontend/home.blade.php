@extends('frontend.layouts.default')

@section('page-level-styles')
    {{-- <link rel="stylesheet" href="{!! asset('assets/css/flexslider.css') !!}" /> --}}
    <link rel="stylesheet" href="{!! asset('assets/css/homeslider.css') !!}" />
@endsection

@section('page-level-nav')
@endsection

@section('content')
    <section id="home1" class="twb-home-section" style="background-image:url({!! asset('images/homeslide/bg.png') !!})">
        <div class="homeslide htmlNoPages">
            {{-- <img src="{!! asset('images/homeslide/bg.png') !!}" class="gwd-img-1u7v"> --}}
            <img src="{!! asset('images/homeslide/mountain2.png') !!}" class="gwd-img-13ie gwd-gen-b63vgwdanimation">
            <img src="{!! asset('images/homeslide/mountain1.png') !!}" class="gwd-img-1952 gwd-gen-1vbrgwdanimation">
            <img src="{!! asset('images/homeslide/jungle.png') !!}" class="gwd-img-1wzq gwd-gen-10d6gwdanimation">
            <img src="{!! asset('images/homeslide/ground2.png') !!}" class="gwd-img-x9n3 gwd-gen-e3zbgwdanimation">
            <img src="{!! asset('images/homeslide/ground1.png') !!}" class="gwd-img-15sg gwd-gen-arkugwdanimation">
            <img src="{!! asset('images/homeslide/tree3.png') !!}" class="gwd-img-l3qa gwd-gen-1yv1gwdanimation">
            <img src="{!! asset('images/homeslide/tree1.png') !!}" class="gwd-img-zgj3 gwd-gen-1562gwdanimation">
            <img src="{!! asset('images/homeslide/tree2.png') !!}" class="gwd-img-1vix gwd-gen-1a9pgwdanimation">
            <img src="{!! asset('images/homeslide/tree1.png') !!}" class="gwd-img-m246 gwd-gen-1tl3gwdanimation">
            <a href="{!! url('/seru-mewarnai') !!}" title="Seru Mewarnai"><img src="{!! asset('images/homeslide/house.png') !!}" class="gwd-img-jhwp gwd-gen-1t2zgwdanimation"></a>
            <img src="{!! asset('images/homeslide/sun.png') !!}" class="gwd-img-11ze gwd-gen-6xzmgwdanimation">
            <img src="{!! asset('images/homeslide/cloud1.png') !!}" class="gwd-img-cloud1left gwd-gen-cloud1left">
            <img src="{!! asset('images/homeslide/cloud2.png') !!}" class="gwd-img-cloud2left gwd-gen-cloud2left">
            <img src="{!! asset('images/homeslide/cloud1.png') !!}" class="gwd-img-cloud1right gwd-gen-cloud1right">
            <img src="{!! asset('images/homeslide/cloud2.png') !!}" class="gwd-img-cloud2right gwd-gen-cloud2right">
            <img src="{!! asset('images/homeslide/bird.png') !!}" class="gwd-img-bird1left gwd-gen-bird1left">
            <img src="{!! asset('images/homeslide/bird.png') !!}" class="gwd-img-bird2left gwd-gen-bird2left">
            <img src="{!! asset('images/homeslide/bird.png') !!}" class="gwd-img-bird3left gwd-gen-bird3left">
            <img src="{!! asset('images/homeslide/bird.png') !!}" class="gwd-img-bird1right gwd-gen-bird1right">
            <img src="{!! asset('images/homeslide/bird.png') !!}" class="gwd-img-bird2right gwd-gen-bird2right">
            <img src="{!! asset('images/homeslide/bird.png') !!}" class="gwd-img-bird3right gwd-gen-bird3right">
            <div class="slides-text uk-position-center">Selamat Datang di Dunia Tini Wini Biti</div>
        </div>
        {{-- <div class="flexslider">
            <ul class="slides">
                <li>

                </li>
            </ul>
        </div> --}}
    </section>
    <section id="home2" class="twb-home-section uk-background-cover uk-background-top uk-flex uk-flex-middle" style="background-image: url({!! asset('assets/img/bg-home-2.png') !!});">
        <div class="uk-width-1-1">
            <div class="uk-container uk-container-small">
                <div class="uk-flex uk-flex-middle@m uk-flex-top@s" uk-grid>
                    <div class="uk-width-1-1@s uk-width-1-2@m">
                        <h2 class="white-text">Tentang Produk Kami</h2>
                        <p class="white-text">Tini Wini Biti adalah biskuit untuk anak yang berbentuk karakter 5 binatang yang lucu, yaitu Gajah, Bebek, Ikan, Kura-kura, dan Kupu-kupu. Tersedia dalam berbagai macam rasa yang enak dan pasti disukai anak-anak.</p>
                        <p class="white-text">Tini Wini Biti bisa menjadi teman bermain dan belajar untuk anak, karena setiap kemasannya dapat bercerita, serta bentuk biskuit yang imut dan lucu akan membantu mereka mengembangkan daya imajinasi yang kreatif.</p>
                        <p><a href="{!! url('/produk-kami') !!}" class="uk-button twb-button-yellow">Variasi Produk</a></p>
                        <p><a href="{!! url('/video') !!}" class="uk-button twb-button-yellow">Video Iklan</a></p>
                    </div>
                    <div class="uk-width-1-1@s uk-width-1-2@m uk-flex-first uk-flex-last@m">
                        <img src="{!! asset('assets/img/home-2.png') !!}" alt="Tini Wini Biti">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="home3" class="twb-home-section uk-flex uk-flex-middle">
        <div class="uk-container uk-container-small uk-text-center">
            <h2 class="twb-blue-text">PROMO SPESIAL KAMI</h2>
            <p class="uk-margin-large-bottom">Dapatkan promo terbaru kami.</p>
            <div class="uk-flex uk-flex-middle uk-flex-between" uk-grid>
                <div class="uk-width-1-1 uk-width-1-3@m">
                    <a href="" class="twb-homebanner" title=""><img src="{!! asset('images/sample-content/homebanner1.jpeg') !!}" alt="Tini Wini Biti"></a>
                </div>
                <div class="uk-width-1-1 uk-width-1-3@m">
                    <a href="" class="twb-homebanner" title=""><img src="{!! asset('images/sample-content/homebanner2.png') !!}" alt="Tini Wini Biti"></a>
                </div>
                <div class="uk-width-1-1 uk-width-1-3@m">
                    <a href="" class="twb-homebanner" title=""><img src="{!! asset('images/sample-content/homebanner3.png') !!}" alt="Tini Wini Biti"></a>
                </div>
            </div>
        </div>
    </section>
    <section id="home4" class="twb-home-section uk-flex uk-flex-middle">
        <div class="uk-width-1-1">
            <div class="uk-container uk-container-small">
                <h2 class="twb-blue-text">BERITA</h2>
                <ul class="uk-list uk-list-large">
                    @foreach($news as $theNews)
                    <li>
                        <div class="uk-grid-medium" uk-grid>
                            <div class="uk-width-1-1 uk-width-auto@m twb-news-thumb">
                                @if ($theNews->fullpath != '')
                                    <img src="{!! asset($theNews->fullpath) !!}" alt="{{ $theNews->title }}" />
                                @else
                                    <img src="{!! asset('images/default.png') !!}" alt="{{ $theNews->title }}" />
                                @endif
                            </div>
                            <div class="uk-width-1-1 uk-width-expand@m">
                                <div class="uk-grid-medium" uk-grid>
                                    <div class="uk-width-expand">
                                        <h5 class="twb-blue-text uk-margin-small-bottom">{{ $theNews->title }}</h5>
                                        <div class="uk-margin-small-bottom">{{ $theNews->excerpt }}</div>
                                        <div>{{ changeDateFormat($theNews->publish_at, 'Y-m-d H:i:s', 'd F Y') }}</div>
                                    </div>
                                    <div class="uk-width-auto">
                                        <a href="{{ url('berita/detail/' . $theNews->slug) }}" class="uk-button uk-button-small uk-button-primary twb-btn-baca" title="">Baca</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                    @endforeach
                </ul>
            </div>
        </div>
    </section>
@endsection

@section('page-level-scripts')
    {{-- <script src="{!! asset('assets/js/jquery.scrollify.min.js') !!}"></script> --}}
    {{-- <script src="{!! asset('assets/js/jquery.flexslider-min.js') !!}"></script> --}}
    <script>
        $(document).ready(function() {
            // $.scrollify({
            //     section : ".twb-home-section",
            //     interstitialSection:"footer"
            // });
            // $('.flexslider').flexslider({
            //     animation: 'fade',
            //     directionNav: false,
            //     smoothHeight: true
            // });
            var w = $('.homeslide').width();
            var h = w * 800/1440;
            $('.homeslide').height(h);
        });
        // $(window).resize(function() {
        //     location.reload();
        // });
        $( window ).on( "orientationchange", function( event ) {
            location.reload();
        });
    </script>

    <script type="text/javascript" gwd-events="support" src="{!! asset('assets/js/gwd-events-support.1.0.js') !!}"></script>
    <script type="text/javascript" gwd-events="registration">
        document.addEventListener("DOMContentLoaded", gwd.actions.events.registerEventHandlers);
        document.addEventListener("unload", gwd.actions.events.deregisterEventHandlers);
    </script>
@endsection
