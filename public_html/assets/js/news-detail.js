function loadNews(url, search) {
    newsUrl = baseUrl + '/' + url;
    var data = {
        'currentId': currentId
    };
    if(search != undefined) {
        data = {
            'currentId': currentId,
            'search': search
        };
    }
    $.ajax({
        url: newsUrl,
        data: data,
        beforeSend: function( xhr ) {
            // loading animation here
            //console.log('loading animation');
        }
    }).done(function(result) {
        let $res = $.parseJSON(result);
        console.log($res);
        if($res.total > 0) {
            setTimeout(function() {
                //stop the animation
                //console.log('animation stop');
                generateNews($res);
            }, 500);
        } else {
            //stop the animation
            generateBlankNews();
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
    generateVideoContent($res.data);
}

function generateBlankNews() {
    blankContent = '<div class="uk-panel uk-padding-small white twb-border-bottom">' +
        '<p>Tidak ada data.</p>' +
        '</div>';
    $('.news-container').empty();
    $('.news-container').append(blankContent);
}

function generateVideoContent($data) {
    let videoContent = '';
    $.each($data, function (index, news) {
        let publishDate = moment(news.publish_at, "YYYY-MM-DD HH:mm:ss").fromNow();
        let newsImage = baseUrl+'/images/sample-content/vid-thumb-1.png';
        if (news.fullpath != '' && news.fullpath != null) {
            newsImage = baseUrl + '/' + news.fullpath;
        }
        let newsLink = baseUrl + '/berita/detail/' + news.slug;
        videoContent += '<div class="uk-panel uk-padding-small white twb-border-bottom">' +
            '<div class="uk-grid-small" uk-grid>' +
        '<div class="uk-width-1-3">' +
            '<a class="uk-inline" href="'+newsLink+'">' +
            '<img src="'+newsImage+'" alt="Tini Wini Biti">' +
            '</a>' +
            '</div>' +
            '<div class="uk-width-2-3">' +
            '<a href="'+newsLink+'" title="" class="grey-text text-darken-2">'+news.title+'</a>' +
        '<br>' +
        '<span class="uk-text-muted">'+publishDate+'</span>' +
        '</div>' +
        '</div>' +
        '</div>';
    })
    $('.news-container').empty();
    $('.news-container').append(videoContent);
}