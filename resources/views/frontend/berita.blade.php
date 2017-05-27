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
            <div class="news-container"></div>
            <div class="uk-panel uk-padding-small white">
                <a class="uk-button uk-button-small twb-blue white-text twb-btn-paging news-prev-button" href="javascript:;"><span uk-icon="icon: chevron-left"></span></a>
                <a class="uk-button uk-button-small twb-blue white-text twb-btn-paging news-next-button" href="javascript:;"><span uk-icon="icon: chevron-right"></span></a>
            </div>

            @include('frontend.includes.event')
        </div>
    </section>
@endsection

@section('page-level-scripts')
    <script>
        $(document).ready(function() {
            loadNews('berita-paginated');

            $('.news-prev-button').on('click', function() {
                let url = $(this).attr('data-link');
                if (url != '#' && url != '') {
                    loadNews(url);
                }
            });

            $('.news-next-button').on('click', function() {
                let url = $(this).attr('data-link');
                if (url != '#' && url != '') {
                    loadNews(url);
                }
            });
        });
    </script>
    <script src="{{ asset('assets/js/berita.js') }}"></script>
@endsection
