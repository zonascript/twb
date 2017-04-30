@extends('frontend.layouts.default')

@section('page-level-styles')
@endsection

@section('page-level-nav')
@endsection

@section('content')
    <section class="twb-content">
        <div class="uk-container uk-container-small">
            <h2 class="twb-blue-text">VIDEO</h2>
            <div uk-grid>
                <div class="uk-width-3-5">
                    <article class="uk-article">
                        <div class="twb-vid">
                            <iframe src="//www.youtube.com/embed/5RoMXdmcX9w?rel=0&amp;wmode=transparent" frameborder="0" allowfullscreen class="uk-width-1-1 uk-height-medium"></iframe>
                        </div>
                        <h3>Title Lorem Ipsum Dolore</h3>
                        <p class="uk-article-meta">29 Maret 2018</p>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                        <div>
                            <a class="uk-button uk-button-default uk-button-small uk-text-capitalize" href="#">
                                Follow &amp; Comment <span uk-icon="icon: arrow-right"></span>
                            </a>
                        </div>
                    </article>
                </div>
                <div class="uk-width-2-5">
                    <div class="uk-panel uk-padding-small white twb-border-bottom">
                        <h6 class="twb-blue-text uk-margin-small-bottom">Video Lain</h6>
                        <div class="uk-inline uk-width-1-1">
                            <span class="uk-form-icon" uk-icon="icon: search"></span>
                            <input class="uk-input uk-width-1-1 uk-form-small" type="text">
                        </div>
                    </div>

                    <div class="uk-panel uk-padding-small white twb-border-bottom">
                        <div class="uk-grid-small" uk-grid>
                            <div class="uk-width-1-3">
                                <a class="uk-inline uk-light">
                                    <img src="{!! asset('images/sample-content/vid-thumb-1.png') !!}" alt="Tini Wini Biti">
                                    <div href="" class="uk-position-center">
                                        <span uk-icon="icon: play-circle"></span>
                                    </div>
                                </a>
                            </div>
                            <div class="uk-width-2-3">
                                <a href="" title="" class="grey-text text-darken-2">Sed ut perspiciatis unde omnis iste natus error sit</a>
                                <br>
                                <span class="uk-text-muted">1h 25m</span>
                            </div>
                        </div>
                    </div>
                    <div class="uk-panel uk-padding-small white twb-border-bottom">
                        <div class="uk-grid-small" uk-grid>
                            <div class="uk-width-1-3">
                                <a class="uk-inline uk-light">
                                    <img src="{!! asset('images/sample-content/vid-thumb-2.png') !!}" alt="Tini Wini Biti">
                                    <div href="" class="uk-position-center">
                                        <span uk-icon="icon: play-circle"></span>
                                    </div>
                                </a>
                            </div>
                            <div class="uk-width-2-3">
                                <a href="" title="" class="grey-text text-darken-2">Sed ut perspiciatis unde omnis iste natus error sit</a>
                                <br>
                                <span class="uk-text-muted">1h 25m</span>
                            </div>
                        </div>
                    </div>
                    <div class="uk-panel uk-padding-small white twb-border-bottom">
                        <div class="uk-grid-small" uk-grid>
                            <div class="uk-width-1-3">
                                <a class="uk-inline uk-light">
                                    <img src="{!! asset('images/sample-content/vid-thumb-3.png') !!}" alt="Tini Wini Biti">
                                    <div href="" class="uk-position-center">
                                        <span uk-icon="icon: play-circle"></span>
                                    </div>
                                </a>
                            </div>
                            <div class="uk-width-2-3">
                                <a href="" title="" class="grey-text text-darken-2">Sed ut perspiciatis unde omnis iste natus error sit</a>
                                <br>
                                <span class="uk-text-muted">1h 25m</span>
                            </div>
                        </div>
                    </div>
                    <div class="uk-panel uk-padding-small white twb-border-bottom">
                        <div class="uk-grid-small" uk-grid>
                            <div class="uk-width-1-3">
                                <a class="uk-inline uk-light">
                                    <img src="{!! asset('images/sample-content/vid-thumb-4.png') !!}" alt="Tini Wini Biti">
                                    <div href="" class="uk-position-center">
                                        <span uk-icon="icon: play-circle"></span>
                                    </div>
                                </a>
                            </div>
                            <div class="uk-width-2-3">
                                <a href="" title="" class="grey-text text-darken-2">Sed ut perspiciatis unde omnis iste natus error sit</a>
                                <br>
                                <span class="uk-text-muted">1h 25m</span>
                            </div>
                        </div>
                    </div>
                    <div class="uk-panel uk-padding-small white twb-border-bottom">
                        <div class="uk-grid-small" uk-grid>
                            <div class="uk-width-1-3">
                                <a class="uk-inline uk-light">
                                    <img src="{!! asset('images/sample-content/vid-thumb-5.png') !!}" alt="Tini Wini Biti">
                                    <div href="" class="uk-position-center">
                                        <span uk-icon="icon: play-circle"></span>
                                    </div>
                                </a>
                            </div>
                            <div class="uk-width-2-3">
                                <a href="" title="" class="grey-text text-darken-2">Sed ut perspiciatis unde omnis iste natus error sit</a>
                                <br>
                                <span class="uk-text-muted">1h 25m</span>
                            </div>
                        </div>
                    </div>

                    <div class="uk-panel uk-padding-small white">
                        <a class="uk-button uk-button-small twb-blue white-text twb-btn-paging" href="#"><span uk-icon="icon: chevron-left"></span></a>
                        <a class="uk-button uk-button-small twb-blue white-text twb-btn-paging" href="#"><span uk-icon="icon: chevron-right"></span></a>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

@section('page-level-scripts')
    <script>
        $(document).ready(function() {

        });
    </script>
@endsection
