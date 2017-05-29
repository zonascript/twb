// event
function loadEvents(url) {
    $.ajax({
        url: baseUrl + '/' + url,
        beforeSend: function( xhr ) {
            // loading animation here
            $('.events-container').html('<div class="uk-height-small uk-width-1-1 uk-position-relative uk-text-center loader">'+ loader +'</div>');
        }
    }).done(function(result) {
        let $res = $.parseJSON(result);
        if($res.total > 0) {
            setTimeout(function() {
                $('.loader').remove();
                generateEvents($res);
            }, 300);
        } else {
            //stop the animation
            $('.loader').remove();
            generateEmptyEvent();
        }
    });
}

function generateEvents($res) {
    let $prevButton = '';
    if ($res.prev_page_url != null) {
        $prevButton = $res.prev_page_url;
        $('.events-prev-button').removeClass('uk-disabled');
    } else {
        $('.events-prev-button').addClass('uk-disabled');
    }
    let $nextButton = '';
    if ($res.next_page_url != null) {
        $('.events-next-button').removeClass('uk-disabled');
        $nextButton = $res.next_page_url;
    } else {
        $('.events-next-button').addClass('uk-disabled');
    }
    $('.events-prev-button').attr('data-link', $prevButton);
    $('.events-next-button').attr('data-link', $nextButton);
    generateEventsContent($res.data);
}

function generateEventsContent($data) {
    let eventsContent = '';
    $.each($data, function (index, events) {
        eventDate = moment(events.event_date, 'YYYY-MM-DD HH:mm:ss').format('DD MMM YYYY');
        publishDate = moment(events.publish_at, "YYYY-MM-DD HH:mm:ss").fromNow();
        eventsContent += '<div class="uk-panel uk-padding-small white twb-border-bottom">' +
            ' <div class="uk-grid-medium" uk-grid> ' +
                ' <div class="uk-width-1-1 uk-width-auto@m twb-calendar-thumb uk-text-center uk-position-relative"> ' +
                    '<div class="uk-inline">' +
                        '<img src="'+baseUrl+'/assets/img/calendar.png" alt="Calendar">' +
                        '<div class="uk-overlay uk-position-center">' +
                            '<div class="uk-margin-top">'+eventDate+'</div>' +
                        '</div>' +
                    '</div>' +
                ' </div> ' +
                ' <div class="uk-width-1-1 uk-width-expand@m"> ' +
                    ' <div class="uk-grid-medium" uk-grid> ' +
                        ' <div class="uk-width-expand"> ' +
                            '<div class="uk-article-meta">'+publishDate+'</div>' +
                            ' <h5 class="twb-blue-text uk-margin-small-top uk-margin-small-bottom">'+events.title+'</h5> ' +
                            ' <div class="uk-margin-small-top">'+events.excerpt+'</div> ' +
                        ' </div> ' +
                        ' <div class="uk-width-auto"> ' +
                            ' <a href="" class="uk-button uk-button-small uk-button-danger twb-btn-info" title="Info">Info</a> ' +
                        ' </div> ' +
                    ' </div> ' +
                ' </div> ' +
            ' </div> ' +
        ' </div> ';
    })

    $('.events-container').empty();
    $('.events-container').append(eventsContent);
}

function generateEmptyEvent() {
    blankContent = '<div class="uk-panel uk-padding-small white twb-border-bottom">' +
        '<p>Tidak ada data.</p>' +
        '</div>';
    $('.events-container').empty();
    $('.events-container').append(blankContent);
}
