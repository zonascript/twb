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

                <div class="uk-width-1-1@s uk-width-3-5@m">
                    <article class="uk-article">
                        @if ($video)
                        <div class="twb-vid">
                            <iframe src="//www.youtube.com/embed/{!! $video->video_id !!}?rel=0&amp;wmode=transparent" frameborder="0" allowfullscreen class="uk-width-1-1 uk-height-medium"></iframe>
                        </div>
                        <h3>{!! $video->title !!}</h3>
                        <p class="uk-article-meta">{!! \Carbon\Carbon::createFromFormat('Y-m-d H:i:s', $video->publish_at)->diffForHumans() !!}</p>
                        <p>{!! $video->content !!}</p>
                        {{--<div>--}}
                            {{--<a class="uk-button uk-button-default uk-button-small uk-text-capitalize" href="#">--}}
                                {{--Follow &amp; Comment <span uk-icon="icon: arrow-right"></span>--}}
                            {{--</a>--}}
                        {{--</div>--}}
                        @else
                            <div class="">Tidak ada data.</div>
                        @endif
                    </article>
                </div>

                <div class="uk-width-1-1@s uk-width-2-5@m">
                    <div class="uk-panel uk-padding-small white twb-border-bottom">
                        <h6 class="twb-blue-text uk-margin-small-bottom">Video Lain</h6>
                        <div class="uk-inline uk-width-1-1">
                            <span class="uk-form-icon" uk-icon="icon: search"></span>
                            <input class="uk-input uk-width-1-1 uk-form-small video-search" type="text">
                        </div>
                    </div>

                    <div class="videos-container"></div>

                    <div class="uk-panel uk-padding-small white">
                        <a class="uk-button uk-button-small twb-blue white-text twb-btn-paging video-prev-button" href="javascript:;"><span uk-icon="icon: chevron-left"></span></a>
                        <a class="uk-button uk-button-small twb-blue white-text twb-btn-paging video-next-button" href="javascript:;"><span uk-icon="icon: chevron-right"></span></a>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

@section('page-level-scripts')
    <script src="{!! asset('assets/js/moment.min.js') !!}"></script>
    <script src="{!! asset('assets/js/video.js') !!}"></script>
    <script>
        var currentId = '{!! $video->id !!}';
        $(document).ready(function() {
            loadVideos('videos-paginated');

            $('.video-prev-button').on('click', function() {
                let url = $(this).attr('data-link');
                if (url != '#' && url != '') {
                    loadVideos(url);
                }
            });

            $('.video-next-button').on('click', function() {
                let url = $(this).attr('data-link');
                if (url != '#' && url != '') {
                    loadVideos(url);
                }
            });

            $('.video-search').keyup(function() {
                var searchVal = $(this).val();

                if(searchVal.length >= 3) { //for checking 3 characters
                    loadVideos('videos-paginated', searchVal);
                }

                if(searchVal.length == 0) {
                    loadVideos('videos-paginated');
                }
            });
        });
    </script>
@endsection
