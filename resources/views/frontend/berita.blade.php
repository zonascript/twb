@extends('frontend.layouts.default')

@section('page-level-styles')
@endsection

@section('page-level-nav')
@endsection

@section('content')
    <section class="twb-content">
        <div class="uk-container uk-container-small">
            @include('frontend.includes.news')

            @include('frontend.includes.event')
        </div>
    </section>
@endsection

@section('page-level-scripts')
    <script src="{!! asset('assets/js/moment.min.js') !!}"></script>
    <script>
        $(document).ready(function() {
            var type = 'latest';
            loadNews('news-paginated', type);
            loadEvents('event-paginated');

            $('.news-latest').on('click', function() {
                loadNews('news-paginated', 'latest');
                type = 'latest';
                $('.news-search').val('');
            });

            $('.news-popular').on('click', function() {
                loadNews('news-paginated', 'popular');
                type = 'popular';
                $('.news-search').val('');
            });

            $('.news-prev-button').on('click', function() {
                let url = $(this).attr('data-link');
                if (url != '#' && url != '') {
                    loadNews(url, type);
                }
            });

            $('.news-next-button').on('click', function() {
                let url = $(this).attr('data-link');
                if (url != '#' && url != '') {
                    loadNews(url, type);
                }
            });

            $('.events-prev-button').on('click', function() {
                let url = $(this).attr('data-link');
                if (url != '#' && url != '') {
                    loadEvents(url);
                }
            });

            $('.events-next-button').on('click', function() {
                let url = $(this).attr('data-link');
                if (url != '#' && url != '') {
                    loadEvents(url);
                }
            });

            $('.news-search').keyup(function() {
                var searchVal = $(this).val();

                if(searchVal.length >= 3) { //for checking 3 characters
                    loadNews('news-paginated', type, searchVal);
                }

                if(searchVal.length == 0) {
                    loadNews('news-paginated', type);
                }
            });
        });
    </script>
    <script src="{{ asset('assets/js/news.js') }}"></script>
    <script src="{{ asset('assets/js/event.js') }}"></script>
@endsection
