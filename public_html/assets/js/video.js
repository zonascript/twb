function loadVideos(url, search) {
    videoUrl = baseUrl + '/' + url;
    // console.log(videoUrl);
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
        url: videoUrl,
        data: data,
        beforeSend: function( xhr ) {
            // loading animation here
            //console.log('loading animation');
        }
    }).done(function(result) {
        let $res = $.parseJSON(result);
        // console.log($res);
        if($res.total > 0) {
            setTimeout(function() {
                //stop the animation
                //console.log('animation stop');
                generateVideos($res);
            }, 500);
        } else {
            //stop the animation
            generateEmptyVideos();
        }
    });
}

function generateVideos($res) {
    let $prevButton = '';
    if ($res.prev_page_url != null) {
        $prevButton = $res.prev_page_url;
        $('.video-prev-button').removeClass('uk-disabled');
    } else {
        $('.video-prev-button').addClass('uk-disabled');
    }
    let $nextButton = '';
    if ($res.next_page_url != null) {
        $('.video-next-button').removeClass('uk-disabled');
        $nextButton = $res.next_page_url;
    } else {
        $('.video-next-button').addClass('uk-disabled');
    }
    $('.video-prev-button').attr('data-link', $prevButton);
    $('.video-next-button').attr('data-link', $nextButton);
    generateVideoContent($res.data);
}

function generateEmptyVideos() {
    blankContent = '<div class="uk-panel uk-padding-small white twb-border-bottom">' +
        '<p>Tidak ada data.</p>' +
        '</div>';
    $('.videos-container').empty();
    $('.videos-container').append(blankContent);
}

function generateVideoContent($data) {
    let videoContent = '';
    $.each($data, function (index, video) {
        publishDate = moment(video.publish_at, "YYYY-MM-DD HH:mm:ss").fromNow();
        videoContent += '<div class="uk-panel uk-padding-small white twb-border-bottom">' +
            '<div class="uk-grid-small" uk-grid>' +
        '<div class="uk-width-1-3">' +
            '<a class="uk-inline uk-light" href="'+baseUrl+'/video/'+video.slug+'">' +
            '<img src="http://img.youtube.com/vi/'+video.video_id+'/0.jpg" alt="Tini Wini Biti">' +
            '<div href="" class="uk-position-center">' +
            '<span uk-icon="icon: play-circle"></span>' +
            '</div>' +
            '</a>' +
            '</div>' +
            '<div class="uk-width-2-3">' +
            '<a href="'+baseUrl+'/video/'+video.slug+'" title="" class="grey-text text-darken-2">'+video.title+'</a>' +
        '<br>' +
        '<span class="uk-text-muted">'+publishDate+'</span>' +
        '</div>' +
        '</div>' +
        '</div>';
    })
    $('.videos-container').empty();
    $('.videos-container').append(videoContent);
}
