@extends('frontend.layouts.default')

@section('page-level-styles')
    <link rel="stylesheet" href="{!! asset('assets/css/flexslider.css') !!}" />
@endsection

@section('page-level-nav')
@endsection

@section('content')
    <section id="home1" class="twb-home-section">
        <div class="flexslider">
            <ul class="slides">
                <li>
                    <div class="uk-background-cover uk-background-bottom uk-height-viewport uk-width-1-1 uk-flex uk-flex-center uk-flex-middle" style="background-image: url({!! asset('assets/img/bg-home.png') !!});">
                        <div class="slides-text">Selamat datang lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</div>
                    </div>
                </li>
                {{-- <li>
                    <img src="{!! asset('assets/img/bg-home-2.png') !!}"/>
                </li>
                <li>
                    <img src="{!! asset('assets/img/home-2.png') !!}"/>
                </li> --}}
            </ul>
        </div>
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
@endsection
