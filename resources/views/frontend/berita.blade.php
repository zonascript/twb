@extends('frontend.layouts.default')

@section('page-level-styles')
@endsection

@section('page-level-nav')
@endsection

@section('content')
    <section class="twb-content">
        <div class="uk-container uk-container-small">
            <h2 class="twb-blue-text">BERITA</h2>
            <div class="uk-panel uk-padding-small white twb-border-bottom uk-flex uk-flex-middle uk-flex-between">
                <ul class="uk-subnav uk-subnav-divider uk-margin-remove-bottom">
                    <li><a href="" class="uk-text-capitalize twb-blue-text">Terkini</a></li>
                    <li><a href="" class="uk-text-capitalize twb-blue-text">Populer</a></li>
                </ul>
                <div class="uk-inline uk-width-medium">
                    <span class="uk-form-icon" uk-icon="icon: search"></span>
                    <input class="uk-input uk-width-1-1 uk-form-small" type="text" placeholder="Cari artikel berita">
                </div>
            </div>
            <div class="uk-panel uk-padding-small white twb-border-bottom">
                <div class="uk-grid-medium" uk-grid>
                    <div class="uk-width-auto twb-news-thumb">
                        <img src="{!! asset('images/sample-content/news1.png') !!}" alt="Tini Wini Biti">
                    </div>
                    <div class="twb-news-excerpt uk-width-3-5">
                        <h5 class="twb-blue-text uk-margin-small-bottom">Lorem ipsum dolor sit amet, consectetur adipisicing elit</h5>
                        <div class="uk-margin-small-bottom">Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</div>
                        <div>28 Maret 2017</div>
                    </div>
                    <div class="uk-width-auto"><a href="{!! url('/berita/detail') !!}" class="uk-button uk-button-small uk-button-primary twb-btn-baca" title="">Baca</a></div>
                </div>
            </div>
            <div class="uk-panel uk-padding-small white twb-border-bottom">
                <div class="uk-grid-medium" uk-grid>
                    <div class="uk-width-auto twb-news-thumb">
                        <img src="{!! asset('images/sample-content/news2.png') !!}" alt="Tini Wini Biti">
                    </div>
                    <div class="twb-news-excerpt uk-width-3-5">
                        <h5 class="twb-blue-text uk-margin-small-bottom">Lorem ipsum dolor sit amet, consectetur adipisicing elit</h5>
                        <div class="uk-margin-small-bottom">Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</div>
                        <div>28 Maret 2017</div>
                    </div>
                    <div class="uk-width-auto"><a href="{!! url('/berita/detail') !!}" class="uk-button uk-button-small uk-button-primary twb-btn-baca" title="">Baca</a></div>
                </div>
            </div>
            <div class="uk-panel uk-padding-small white twb-border-bottom">
                <div class="uk-grid-medium" uk-grid>
                    <div class="uk-width-auto twb-news-thumb">
                        <img src="{!! asset('images/sample-content/news3.png') !!}" alt="Tini Wini Biti">
                    </div>
                    <div class="twb-news-excerpt uk-width-3-5">
                        <h5 class="twb-blue-text uk-margin-small-bottom">Lorem ipsum dolor sit amet, consectetur adipisicing elit</h5>
                        <div class="uk-margin-small-bottom">Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</div>
                        <div>28 Maret 2017</div>
                    </div>
                    <div class="uk-width-auto"><a href="{!! url('/berita/detail') !!}" class="uk-button uk-button-small uk-button-primary twb-btn-baca" title="">Baca</a></div>
                </div>
            </div>
            <div class="uk-panel uk-padding-small white">
                <a class="uk-button uk-button-small twb-blue white-text twb-btn-paging" href="#"><span uk-icon="icon: chevron-left"></span></a>
                <a class="uk-button uk-button-small twb-blue white-text twb-btn-paging" href="#"><span uk-icon="icon: chevron-right"></span></a>
            </div>

            <h2 class="twb-blue-text">AGENDA ACARA</h2>
            <div class="uk-panel uk-padding-small white twb-border-bottom">
                <div class="uk-grid-medium" uk-grid>
                    <div class="twb-calendar-thumb">
                        <div class="uk-inline">
                            <img src="{!! asset('assets/img/calendar.png') !!}" alt="Tini Wini Biti">
                            <div class="uk-overlay uk-position-center">
                                <div class="uk-margin-top">28 Maret 2017</div>
                            </div>
                        </div>
                    </div>
                    <div class="twb-news-excerpt uk-width-3-5">
                        <div class="uk-article-meta">28 Maret 2017</div>
                        <h5 class="uk-margin-small-bottom uk-margin-small-top">Lorem ipsum dolor sit amet, consectetur adipisicing elit</h5>
                        <div>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</div>
                    </div>
                    <div class="uk-width-auto"><a href="" class="uk-button uk-button-small uk-button-danger twb-btn-info" title="Info">Info</a></div>
                </div>
            </div>
            <div class="uk-panel uk-padding-small white twb-border-bottom">
                <div class="uk-grid-medium" uk-grid>
                    <div class="twb-calendar-thumb">
                        <div class="uk-inline">
                            <img src="{!! asset('assets/img/calendar.png') !!}" alt="Tini Wini Biti">
                            <div class="uk-overlay uk-position-center">
                                <div class="uk-margin-top">28 Maret 2017</div>
                            </div>
                        </div>
                    </div>
                    <div class="twb-news-excerpt uk-width-3-5">
                        <div class="uk-article-meta">28 Maret 2017</div>
                        <h5 class="uk-margin-small-bottom uk-margin-small-top">Lorem ipsum dolor sit amet, consectetur adipisicing elit</h5>
                        <div>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</div>
                    </div>
                    <div class="uk-width-auto"><a href="" class="uk-button uk-button-small uk-button-danger twb-btn-info" title="Info">Info</a></div>
                </div>
            </div>
            <div class="uk-panel uk-padding-small white twb-border-bottom">
                <div class="uk-grid-medium" uk-grid>
                    <div class="twb-calendar-thumb">
                        <div class="uk-inline">
                            <img src="{!! asset('assets/img/calendar.png') !!}" alt="Tini Wini Biti">
                            <div class="uk-overlay uk-position-center">
                                <div class="uk-margin-top">28 Maret 2017</div>
                            </div>
                        </div>
                    </div>
                    <div class="twb-news-excerpt uk-width-3-5">
                        <div class="uk-article-meta">28 Maret 2017</div>
                        <h5 class="uk-margin-small-bottom uk-margin-small-top">Lorem ipsum dolor sit amet, consectetur adipisicing elit</h5>
                        <div>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</div>
                    </div>
                    <div class="uk-width-auto"><a href="" class="uk-button uk-button-small uk-button-danger twb-btn-info" title="Info">Info</a></div>
                </div>
            </div>
            <div class="uk-panel uk-padding-small white">
                <a class="uk-button uk-button-small twb-blue white-text twb-btn-paging" href="#"><span uk-icon="icon: chevron-left"></span></a>
                <a class="uk-button uk-button-small twb-blue white-text twb-btn-paging" href="#"><span uk-icon="icon: chevron-right"></span></a>
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
