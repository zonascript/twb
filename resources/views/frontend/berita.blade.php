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
            @foreach($news as $content)
                <div class="uk-panel uk-padding-small white twb-border-bottom">
                    <div class="uk-grid-medium" uk-grid>
                        <div class="uk-width-auto twb-news-thumb">
                            @if ($content->fullpath != '')
                                <img src="{!! asset($content->fullpath) !!}" alt="Tini Wini Biti">
                            @else
                                <img src="{!! asset('images/sample-content/news1.png') !!}" alt="Tini Wini Biti">
                            @endif
                        </div>
                        <div class="twb-news-excerpt uk-width-3-5">
                            <h5 class="twb-blue-text uk-margin-small-bottom">{!! $content->title !!}</h5>
                            <div class="uk-margin-small-bottom">{!! $content->content !!}</div>
                            <div>{!! changeDateFormat($content->publish_at, 'Y-m-d H:i:s', 'd F Y') !!}</div>
                        </div>
                        <div class="uk-width-auto"><a href="{!! url('/berita/detail/' . $content->slug) !!}" class="uk-button uk-button-small uk-button-primary twb-btn-baca" title="">Baca</a></div>
                    </div>
                </div>
            @endforeach
            <div class="uk-panel uk-padding-small white">
                <a class="uk-button uk-button-small twb-blue white-text twb-btn-paging" href="#"><span uk-icon="icon: chevron-left"></span></a>
                <a class="uk-button uk-button-small twb-blue white-text twb-btn-paging" href="#"><span uk-icon="icon: chevron-right"></span></a>
            </div>

            @include('frontend.includes.event')
        </div>
    </section>
@endsection

@section('page-level-scripts')
    <script>
        $(document).ready(function() {

        });
    </script>
@endsection
