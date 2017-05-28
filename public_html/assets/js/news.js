function loadNews(url, type, search) {
    if (url.indexOf("latest") >= 0 || url.indexOf("popular") >= 0) {
        newsUrl = baseUrl + '/' + url;
    } else {
        newsUrl = baseUrl + '/' + url + '/' + type;
    }
    // console.log(newsUrl);
    var data = {};
    if(search != undefined) {
        data = {
            'search': search
        };
    }
    $.ajax({
        url: newsUrl,
        data: data,
        beforeSend: function( xhr ) {
            // loading animation here
            $('.news-container').html('<div class="uk-height-small uk-width-1-1 uk-position-relative uk-text-center loader">'+ loader +'</div>');
        }
    }).done(function(result) {
        let $res = $.parseJSON(result);
        // console.log($res);
        if($res.total > 0) {
            setTimeout(function() {
                //stop the animation
                generateNews($res);
                $('.loader').remove();
            }, 300);
        } else {
            //stop the animation
            generateEmptyNews();
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

function generateEmptyNews() {
    blankContent = '<div class="uk-panel uk-padding-small white twb-border-bottom">' +
            '<p>Tidak ada data.</p>' +
            '</div>';
    $('.news-container').empty();
    $('.news-container').append(blankContent);
}

function generateNewsContent($data) {
    let newsContent = '';
    $.each($data, function (index, news) {
        let newsImage = baseUrl+'/images/default.png';
        if (news.fullpath != '' && news.fullpath != null) {
            newsImage = baseUrl + '/' + news.fullpath;
        }
        console.log(news.publish_at);
        publishDate = moment(news.publish_at, "YYYY-MM-DD HH:mm:ss").fromNow();
        newsContent += '<div class="uk-panel uk-padding-small white twb-border-bottom">' +
            '<div class="uk-grid-medium" uk-grid>' +
            '<div class="uk-width-auto twb-news-thumb">' +
            '<img src="'+newsImage+'" alt="Tini Wini Biti">' +
            '</div>' +
            '<div class="twb-news-excerpt uk-width-3-5">' +
            '<h5 class="twb-blue-text uk-margin-small-bottom">'+news.title+'</h5>' +
            '<div class="uk-margin-small-bottom">'+news.excerpt+'</div>' +
            '<div>'+publishDate+'</div>' +
            '</div>' +
            '<div class="uk-width-auto"><a href="'+baseUrl+'/berita/detail/'+news.slug+'" class="uk-button uk-button-small uk-button-primary twb-btn-baca" title="">Baca</a></div>' +
            '</div>' +
            '</div>';
    })
    $('.news-container').empty();
    $('.news-container').append(newsContent);
}