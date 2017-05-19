@extends('frontend.layouts.default')

@section('page-level-styles')
    <link rel="stylesheet" href="{!! asset('assets/css/flexslider.css') !!}" />
    <link rel="stylesheet" href="{!! asset('assets/css/homeslide.css') !!}" />
@endsection

@section('page-level-nav')
@endsection

@section('content')
    <section id="home1" class="twb-home-section">

        <div class="homeslide htmlNoPages">

            <img src="{!! asset('images/homeslide/bg.png') !!}" class="gwd-img-1u7v">
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
            <img src="{!! asset('images/homeslide/cloud1.png') !!}" class="gwd-img-1tow gwd-gen-1b4wgwdanimation">
            <img src="{!! asset('images/homeslide/cloud2.png') !!}" class="gwd-img-qmdo gwd-gen-uhfugwdanimation">
            <img src="{!! asset('images/homeslide/cloud1.png') !!}" class="gwd-img-1183 gwd-gen-noc2gwdanimation">
            <img src="{!! asset('images/homeslide/cloud2.png') !!}" class="gwd-img-1isj gwd-gen-174sgwdanimation">
            <img src="{!! asset('images/homeslide/bird.png') !!}" class="gwd-img-1090 gwd-gen-196jgwdanimation">
            <img src="{!! asset('images/homeslide/bird.png') !!}" class="gwd-img-8c6t gwd-gen-mm0zgwdanimation">
            <img src="{!! asset('images/homeslide/bird.png') !!}" class="gwd-img-gncm gwd-gen-6bfpgwdanimation">
            <img src="{!! asset('images/homeslide/bird.png') !!}" class="gwd-img-1x45 gwd-gen-11a8gwdanimation">
            <img src="{!! asset('images/homeslide/bird.png') !!}" class="gwd-img-u43i gwd-gen-pxmqgwdanimation">
            <img src="{!! asset('images/homeslide/bird.png') !!}" class="gwd-img-6s89 gwd-gen-o3jkgwdanimation">
            <div class="slides-text uk-position-center">Selamat datang lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</div>
        </div>
        {{-- <div class="flexslider">
            <ul class="slides">
                <li>

                </li>
            </ul>
        </div> --}}
    </section>
    <section id="home2" class="twb-home-section uk-background-cover uk-background-top uk-flex uk-flex-middle" style="background-image: url({!! asset('assets/img/bg-home-2.png') !!});">
        <div class="uk-container uk-container-small">
            <div class="uk-flex uk-flex-middle" uk-grid>
                <div class="uk-width-1-2@m">
                    <h2 class="white-text">Tentang Produk Kami</h2>
                    <p class="white-text">Tini Wini Biti adalah biskuit yang berbentuk karakter 5 binatang yang lucu, yaitu Gajah, Bebek, Kura-kura, Ikan, dan Kupu-kupu. Tersedia dalam berbagai macam rasa yang enak dan pasti disukai anak-anak, seperti: rasa jagung manis, susu, stroberi, keju, coklat, dan sebagainya.</p>
                    <p class="white-text">Tini Wini Biti bisa menjadi teman bermain dan belajar untuk anak, karena setiap kemasannya dapat bercerita, serta bentuk biskuit yang imut dan lucu akan membantu mereka mengembangkan daya imajinasi yang kreatif.</p>
                    <p><a href="{!! url('/produk-kami') !!}" class="uk-button twb-button-yellow">Variasi Produk</a></p>
                    <p><a href="{!! url('/video') !!}" class="uk-button twb-button-yellow">Video Iklan</a></p>
                </div>
                <div class="uk-width-1-2@m uk-flex-first uk-flex-last@m">
                    <img src="{!! asset('assets/img/home-2.png') !!}" alt="Tini Wini Biti">
                </div>
            </div>
        </div>
    </section>
    <section id="home3" class="twb-home-section uk-flex uk-flex-middle">
        <div class="uk-container uk-container-small uk-text-center">
            <h2 class="twb-blue-text">PROMO SPESIAL KAMI</h2>
            <p class="uk-margin-large-bottom">Lorem ipsum dolor sit amet adipiscing elit, sed do eiusmod incidida ut labore et dolore.</p>
            <div class="uk-flex uk-flex-middle uk-flex-between" uk-grid>
                <div class="uk-width-1-3">
                    <a href="" class="twb-homebanner" title=""><img src="{!! asset('images/sample-content/homebanner1.png') !!}" alt="Tini Wini Biti"></a>
                </div>
                <div class="uk-width-1-3">
                    <a href="" class="twb-homebanner" title=""><img src="{!! asset('images/sample-content/homebanner2.png') !!}" alt="Tini Wini Biti"></a>
                </div>
                <div class="uk-width-1-3">
                    <a href="" class="twb-homebanner" title=""><img src="{!! asset('images/sample-content/homebanner3.png') !!}" alt="Tini Wini Biti"></a>
                </div>
            </div>
        </div>
    </section>
    <section id="home4" class="twb-home-section uk-flex uk-flex-middle">
        <div class="uk-container uk-container-small">
            <h2 class="twb-blue-text">BERITA</h2>
            <ul class="uk-list uk-list-large">
                <li class="uk-grid-medium" uk-grid>
                    <div class="uk-width-auto twb-news-thumb">
                        <img src="{!! asset('images/sample-content/news1.png') !!}" alt="Tini Wini Biti">
                    </div>
                    <div class="twb-news-excerpt uk-width-3-5">
                        <h5 class="twb-blue-text uk-margin-small-bottom">Lorem ipsum dolor sit amet, consectetur adipisicing elit</h5>
                        <div class="uk-margin-small-bottom">Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</div>
                        <div>28 Maret 2017</div>
                    </div>
                    <div class="uk-width-auto"><a href="" class="uk-button uk-button-small uk-button-primary twb-btn-baca" title="">Baca</a></div>
                </li>
                <li class="uk-grid-medium" uk-grid>
                    <div class="uk-width-auto twb-news-thumb">
                        <img src="{!! asset('images/sample-content/news2.png') !!}" alt="Tini Wini Biti">
                    </div>
                    <div class="twb-news-excerpt uk-width-3-5">
                        <h5 class="twb-blue-text uk-margin-small-bottom">Lorem ipsum dolor sit amet, consectetur adipisicing elit</h5>
                        <div class="uk-margin-small-bottom">Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</div>
                        <div>28 Maret 2017</div>
                    </div>
                    <div class="uk-width-auto"><a href="" class="uk-button uk-button-small uk-button-primary twb-btn-baca" title="">Baca</a></div>
                </li>
                <li class="uk-grid-medium" uk-grid>
                    <div class="uk-width-auto twb-news-thumb">
                        <img src="{!! asset('images/sample-content/news3.png') !!}" alt="Tini Wini Biti">
                    </div>
                    <div class="twb-news-excerpt uk-width-3-5">
                        <h5 class="twb-blue-text uk-margin-small-bottom">Lorem ipsum dolor sit amet, consectetur adipisicing elit</h5>
                        <div class="uk-margin-small-bottom">Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</div>
                        <div>28 Maret 2017</div>
                    </div>
                    <div class="uk-width-auto"><a href="" class="uk-button uk-button-small uk-button-primary twb-btn-baca" title="">Baca</a></div>
                </li>
            </ul>
        </div>
    </section>
@endsection

@section('page-level-scripts')
    <script src="{!! asset('assets/js/jquery.scrollify.min.js') !!}"></script>
    <script src="{!! asset('assets/js/jquery.flexslider-min.js') !!}"></script>
    <script>
        $(document).ready(function() {
            $.scrollify({
                section : ".twb-home-section",
                interstitialSection:"footer"
            });
            $('.flexslider').flexslider({
                animation: 'fade',
                directionNav: false,
                smoothHeight: true
            });
        });
    </script>

    <script type="text/javascript" gwd-events="support" src="{!! asset('assets/js/gwd-events-support.1.0.js') !!}"></script>
    <script type="text/javascript" gwd-events="registration">
        document.addEventListener("DOMContentLoaded", gwd.actions.events.registerEventHandlers);
        document.addEventListener("unload", gwd.actions.events.deregisterEventHandlers);
    </script>
@endsection
