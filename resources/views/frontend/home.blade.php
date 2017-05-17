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
                    <div id="animation_container" class="uk-position-top-center">
                		<canvas id="canvas" class="uk-position-center"></canvas>
                		<div id="dom_overlay_container"></div>
                	</div>
                    <div id='_preload_div_'>
                        <span style='display: inline-block; height: 100%; vertical-align: middle;'></span>
                        <img src="{!! asset('images/_preloader.gif') !!}" style='vertical-align: middle; max-height: 100%'/>
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

    <script src="//code.createjs.com/createjs-2015.11.26.min.js"></script>
    <script src="{!! asset('assets/js/twb.js') !!}"></script>
    <script>
        // Global Scripts
        // stop();
    </script>
    <script>
        var canvas, stage, exportRoot, anim_container, dom_overlay_container, fnStartAnimation;
        function init() {
        	canvas = document.getElementById("canvas");
        	anim_container = document.getElementById("animation_container");
        	dom_overlay_container = document.getElementById("dom_overlay_container");
        	images = images||{};
        	ss = ss||{};
        	var loader = new createjs.LoadQueue(false);
        	loader.addEventListener("fileload", handleFileLoad);
        	loader.addEventListener("complete", handleComplete);
        	loader.loadManifest(lib.properties.manifest);
        }
        function handleFileLoad(evt) {
        	if (evt.item.type == "image") { images[evt.item.id] = evt.result; }
        }
        function handleComplete(evt) {
        	//This function is always called, irrespective of the content. You can use the variable "stage" after it is created in token create_stage.
        	var queue = evt.target;
        	var ssMetadata = lib.ssMetadata;
        	for(i=0; i<ssMetadata.length; i++) {
        		ss[ssMetadata[i].name] = new createjs.SpriteSheet( {"images": [queue.getResult(ssMetadata[i].name)], "frames": ssMetadata[i].frames} )
        	}
        	var preloaderDiv = document.getElementById("_preload_div_");
        	preloaderDiv.style.display = 'none';
        	canvas.style.display = 'block';
        	exportRoot = new lib.twb();
        	stage = new createjs.Stage(canvas);
        	stage.addChild(exportRoot);
        	//Registers the "tick" event listener.
        	fnStartAnimation = function() {
        		createjs.Ticker.setFPS(lib.properties.fps);
        		createjs.Ticker.addEventListener("tick", stage);
        	}
        	//Code to support hidpi screens and responsive scaling.
        	function makeResponsive(isResp, respDim, isScale, scaleType) {
        		var lastW, lastH, lastS=1;
        		window.addEventListener('resize', resizeCanvas);
        		resizeCanvas();
        		function resizeCanvas() {
        			var w = lib.properties.width, h = lib.properties.height;
        			var iw = window.innerWidth, ih=window.innerHeight;
        			var pRatio = window.devicePixelRatio || 1, xRatio=iw/w, yRatio=ih/h, sRatio=1;
        			if(isResp) {
        				if((respDim=='width'&&lastW==iw) || (respDim=='height'&&lastH==ih)) {
        					sRatio = lastS;
        				}
        				else if(!isScale) {
        					if(iw<w || ih<h)
        						sRatio = Math.min(xRatio, yRatio);
        				}
        				else if(scaleType==1) {
        					sRatio = Math.min(xRatio, yRatio);
        				}
        				else if(scaleType==2) {
        					sRatio = Math.max(xRatio, yRatio);
        				}
        			}
        			canvas.width = w*pRatio*sRatio;
        			canvas.height = h*pRatio*sRatio;
        			canvas.style.width = anim_container.style.width = dom_overlay_container.style.width = preloaderDiv.style.width = w*sRatio+'px';
        			canvas.style.height = anim_container.style.height = dom_overlay_container.style.height = preloaderDiv.style.height = h*sRatio+'px';
        			stage.scaleX = pRatio*sRatio;
        			stage.scaleY = pRatio*sRatio;
        			lastW = iw; lastH = ih; lastS = sRatio;
        		}
        	}
        	makeResponsive(true,'both',true,1);
        	fnStartAnimation();
        }
    </script>
@endsection
