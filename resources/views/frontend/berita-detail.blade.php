@extends('frontend.layouts.default')

@section('page-level-styles')
@endsection

@section('page-level-nav')
@endsection

@section('content')
    <section class="twb-content">
        <div class="uk-container uk-container-small">
            <h2 class="twb-blue-text">BERITA</h2>
            <div uk-grid>
                <div class="uk-width-3-5">
                    <article class="uk-article uk-padding-small white">
                        <h3 class="twb-blue-text uk-margin-small-bottom">{!! $news->title !!}</h3>
                        <div class="uk-article-meta uk-margin-bottom">
                            {!! changeDateFormat($news->publish_at, 'Y-m-d H:i:s', 'd F Y') !!}
                        </div>
                        @if ($news->fullpath != '')
                            <div class="twb-news-img">
                                <img src="{!! asset($news->fullpath) !!}" alt="{!! $news->title !!}">
                            </div>
                        @endif
                        <div class="twb-article">{!! $news->content !!}</div>
                        <div class="uk-flex uk-flex-middle uk-margin">
                            <span class="uk-margin-small-right">Share :</span>
                            <a href="" class="uk-margin-small-right"><span uk-icon="icon: twitter"></span></a>
                            <a href="" class="uk-margin-small-right"><span uk-icon="icon: facebook"></span></a>
                            <a href=""><span uk-icon="icon: google-plus"></span></a>
                        </div>
                    </article>
                </div>
                <div class="uk-width-2-5">
                    <div class="uk-panel uk-padding-small white twb-border-bottom">
                        <h6 class="twb-blue-text uk-margin-small-bottom">Berita Lain</h6>
                    </div>
                    <div class="uk-panel uk-padding-small white twb-border-bottom">
                        <div class="uk-grid-small" uk-grid>
                            <div class="uk-width-1-3">
                                <a class="uk-inline">
                                    <img src="{!! asset('images/sample-content/vid-thumb-1.png') !!}" alt="Tini Wini Biti">
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
                                <a class="uk-inline">
                                    <img src="{!! asset('images/sample-content/vid-thumb-2.png') !!}" alt="Tini Wini Biti">
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
                                <a class="uk-inline">
                                    <img src="{!! asset('images/sample-content/vid-thumb-3.png') !!}" alt="Tini Wini Biti">
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
                                <a class="uk-inline">
                                    <img src="{!! asset('images/sample-content/vid-thumb-4.png') !!}" alt="Tini Wini Biti">
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
                                <a class="uk-inline">
                                    <img src="{!! asset('images/sample-content/vid-thumb-5.png') !!}" alt="Tini Wini Biti">
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
