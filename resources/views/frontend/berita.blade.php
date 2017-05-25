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

        function loadNews(url) {
            $.ajax({
                url: baseUrl + '/' + url
            }).done(function(result) {
                let $res = $.parseJSON(result);
                if($res.total > 0) {
                    generateNews($res);
                }
            });
        }

        function generateNews($res) {
            let $prevButton = '';
            if ($res.prev_page_url != null) {
                $prevButton = $res.prev_page_url;
                $('.news-prev-button').removeClass('uk-disabled');
            } else {
                $('.news-prev-button').addClass('uk-disabled');
            }
            let $nextButton = '';
            if ($res.next_page_url != null) {
                $('.news-next-button').removeClass('uk-disabled');
                $nextButton = $res.next_page_url;
            } else {
                $('.news-next-button').addClass('uk-disabled');
            }
            $('.news-prev-button').attr('data-link', $prevButton);
            $('.news-next-button').attr('data-link', $nextButton);
            generateNewsContent($res.data);
        }

        function generateNewsContent($data) {
            let newsContent = '';
            $.each($data, function (index, news) {
                let newsImage = baseUrl+'/images/default.png';
                if (news.fullpath != '' && news.fullpath != null) {
                    newsImage = baseUrl + '/' + news.fullpath;
                }
                newsContent += '<div class="uk-panel uk-padding-small white twb-border-bottom">' +
                    '<div class="uk-grid-medium" uk-grid>' +
                    '<div class="uk-width-auto twb-news-thumb">' +
                    '<img src="'+newsImage+'" alt="Tini Wini Biti">' +
                    '</div>' +
                    '<div class="twb-news-excerpt uk-width-3-5">' +
                    '<h5 class="twb-blue-text uk-margin-small-bottom">'+news.title+'</h5>' +
                    '<div class="uk-margin-small-bottom">'+news.content+'</div>' +
                    '<div>'+news.publish_at+'</div>' +
                    '</div>' +
                    '<div class="uk-width-auto"><a href="'+baseUrl+'/berita/detail/'+news.slug+'" class="uk-button uk-button-small uk-button-primary twb-btn-baca" title="">Baca</a></div>' +
                    '</div>' +
                    '</div>';
            })
            $('.news-container').empty();
            $('.news-container').append(newsContent);
        }
    </script>
@endsection
