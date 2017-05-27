function loadNews(url) {
    $.ajax({
        url: baseUrl + '/' + url,
        beforeSend: function( xhr ) {
            // loading animation here
            console.log('loading animation');
        }
    }).done(function(result) {
        let $res = $.parseJSON(result);
        if($res.total > 0) {
            setTimeout(function() {
                //stop the animation
                console.log('animation stop');
                generateNews($res);
            }, 500);
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