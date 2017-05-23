<h2 class="twb-blue-text">AGENDA ACARA</h2>
@foreach($events as $event)
    <div class="uk-panel uk-padding-small white twb-border-bottom">
        <div class="uk-grid-medium" uk-grid>
            <div class="twb-calendar-thumb">
                <div class="uk-inline">
                    <img src="{!! asset('assets/img/calendar.png') !!}" alt="Tini Wini Biti">
                    <div class="uk-overlay uk-position-center">
                        <div class="uk-margin-top">{!! changeDateFormat($event->publish_at, 'Y-m-d H:i:s', 'd F Y') !!}</div>
                    </div>
                </div>
            </div>
            <div class="twb-news-excerpt uk-width-3-5">
                <div class="uk-article-meta">{!! changeDateFormat($event->publish_at, 'Y-m-d H:i:s', 'd F Y') !!}</div>
                <h5 class="uk-margin-small-bottom uk-margin-small-top">{!! $event->title !!}</h5>
                <div>{!! $event->content !!}</div>
            </div>
            <div class="uk-width-auto"><a href="" class="uk-button uk-button-small uk-button-danger twb-btn-info" title="Info">Info</a></div>
        </div>
    </div>
@endforeach
<div class="uk-panel uk-padding-small white">
    <a class="uk-button uk-button-small twb-blue white-text twb-btn-paging" href="#"><span uk-icon="icon: chevron-left"></span></a>
    <a class="uk-button uk-button-small twb-blue white-text twb-btn-paging" href="#"><span uk-icon="icon: chevron-right"></span></a>
</div>