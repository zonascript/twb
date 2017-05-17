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
                    <div class="uk-background-cover uk-background-bottom uk-height-viewport uk-width-1-1 uk-flex uk-flex-center uk-flex-middle" style="background-image: url({!! asset('assets/img/home/bg.png') !!});">
                        {{-- <div class="slides-text">Selamat datang lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</div> --}}
                        {{-- <img class="uk-position-absolute uk-position-bottom-center" src="{!! asset('assets/img/home/bg.png') !!}" alt="Tini Wini Biti"> --}}

                        <img class="uk-position-absolute uk-position-bottom-center uk-animation-slide-bottom" src="{!! asset('assets/img/home/sun.png') !!}" alt="Tini Wini Biti" style="margin-bottom:29%;margin-left:-455px;width:86px;height:auto;">

                        <img class="uk-position-absolute uk-position-bottom-center uk-animation-slide-top" src="{!! asset('assets/img/home/bird.png') !!}" alt="Tini Wini Biti" style="margin-bottom:27%;margin-left:-345px;width:21px;height:auto;">
                        <img class="uk-position-absolute uk-position-bottom-center uk-animation-slide-top" src="{!! asset('assets/img/home/bird.png') !!}" alt="Tini Wini Biti" style="margin-bottom: 28.5%;margin-left: -355px;width: 15px;height:auto;">
                        <img class="uk-position-absolute uk-position-bottom-center uk-animation-slide-top" src="{!! asset('assets/img/home/bird.png') !!}" alt="Tini Wini Biti" style="margin-bottom: 28.5%;margin-left: -332px;width: 10px;height:auto;">

                        <img class="uk-position-absolute uk-position-bottom-center uk-animation-slide-top" src="{!! asset('assets/img/home/bird.png') !!}" alt="Tini Wini Biti" style="margin-bottom: 30.5%;margin-left: 395px;width:21px;height:auto;">
                        <img class="uk-position-absolute uk-position-bottom-center uk-animation-slide-top" src="{!! asset('assets/img/home/bird.png') !!}" alt="Tini Wini Biti" style="margin-bottom: 32%;margin-left: 390px;width: 15px;height:auto;">
                        <img class="uk-position-absolute uk-position-bottom-center uk-animation-slide-top" src="{!! asset('assets/img/home/bird.png') !!}" alt="Tini Wini Biti" style="margin-bottom: 32%;margin-left: 415px;width: 10px;height:auto;">


                        <img class="uk-position-absolute uk-position-bottom-center uk-animation-slide-right" src="{!! asset('assets/img/home/cloud2.png') !!}" alt="Tini Wini Biti" style="margin-bottom:26%;margin-left:-255px;width:37px;height:auto;">
                        <img class="uk-position-absolute uk-position-bottom-center uk-animation-slide-left" src="{!! asset('assets/img/home/cloud2.png') !!}" alt="Tini Wini Biti" style="margin-bottom:27%;margin-left:350px;width:22px;height:auto;">

                        <img class="uk-position-absolute uk-position-bottom-center uk-animation-slide-left" src="{!! asset('assets/img/home/cloud1.png') !!}" alt="Tini Wini Biti" style="margin-bottom:29%;margin-left:-500px;width:68px;height:auto;">
                        <img class="uk-position-absolute uk-position-bottom-center uk-animation-slide-right" src="{!! asset('assets/img/home/cloud1.png') !!}" alt="Tini Wini Biti" style="margin-bottom:29%;margin-left:450px;width:58px;height:auto;">

                        <img class="uk-position-absolute uk-position-bottom uk-animation-slide-bottom" src="{!! asset('assets/img/home/mountain2.png') !!}" alt="Tini Wini Biti" style="margin-bottom:210px;">
                        <img class="uk-position-absolute uk-position-bottom uk-animation-slide-bottom" src="{!! asset('assets/img/home/mountain1.png') !!}" alt="Tini Wini Biti" style="margin-bottom:170px;">
                        <img class="uk-position-absolute uk-position-bottom uk-animation-slide-bottom" src="{!! asset('assets/img/home/jungle.png') !!}" alt="Tini Wini Biti" style="margin-bottom:175px;">

                        <img class="uk-position-absolute uk-position-bottom uk-animation-slide-bottom-small" src="{!! asset('assets/img/home/ground2.png') !!}" alt="Tini Wini Biti" style="margin-bottom:-15px;">

                        <img class="uk-position-absolute uk-position-bottom-center uk-animation-fade" src="{!! asset('assets/img/home/tree3.png') !!}" alt="Tini Wini Biti" style="margin-bottom:195px;margin-left:-285px;width:66px;height:auto;">

                        <img class="uk-position-absolute uk-position-bottom-center uk-animation-fade" src="{!! asset('assets/img/home/tree2.png') !!}" alt="Tini Wini Biti" style="margin-bottom:190px;margin-left:-65px;width:76px;height:auto;">

                        <img class="uk-position-absolute uk-position-bottom-center uk-animation-fade" src="{!! asset('assets/img/home/tree1.png') !!}" alt="Tini Wini Biti" style="margin-bottom:190px;margin-left:365px;width:73px;height:auto;">
                        <img class="uk-position-absolute uk-position-bottom-center uk-animation-fade" src="{!! asset('assets/img/home/tree1.png') !!}" alt="Tini Wini Biti" style="margin-bottom:190px;margin-left:-345px;width:73px;height:auto;">

                        <a href="{!! url('/seru-mewarnai') !!}" title="Seru Mewarnai"><img class="uk-position-absolute uk-position-bottom-center uk-animation-fade" src="{!! asset('assets/img/home/house.png') !!}" alt="Tini Wini Biti" style="margin-bottom:170px;margin-left:120px;width:156px;height:auto;"></a>

                        <img class="uk-position-absolute uk-position-bottom uk-animation-slide-bottom-small" src="{!! asset('assets/img/home/ground1.png') !!}" alt="Tini Wini Biti" style="margin-bottom:-55px;">
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
