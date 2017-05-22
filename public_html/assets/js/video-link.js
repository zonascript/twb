$(document).ready(function() {
    $('.video-link').focusout(function() {
        setVideoImage(this);
    });

    $(".video-link").bind("paste", function(e){
        let link = e.originalEvent.clipboardData.getData('text');
        let videoId = getYoutubeId(link);
        if (videoId != 'error') {
            let embedCode = '<img src="http://img.youtube.com/vi/'+videoId+'/0.jpg" />';
            $('.youtube-viewer').empty();
            $('.youtube-viewer').append(embedCode);
        } else {
            $('.youtube-viewer').empty();
        }
    } );

    function setVideoImage($videoLinkEl) {
        let link = $($videoLinkEl).val();
        let videoId = getYoutubeId(link);
        if (videoId != 'error') {
            let embedCode = '<img src="http://img.youtube.com/vi/'+videoId+'/0.jpg" />';
            $('.youtube-viewer').empty();
            $('.youtube-viewer').append(embedCode);
        } else {
            $('.youtube-viewer').empty();
        }
    }

    function getYoutubeId(url) {
        var regExp = /^.*(youtu.be\/|v\/|u\/\w\/|embed\/|watch\?v=|\&v=)([^#\&\?]*).*/;
        var match = url.match(regExp);

        if (match && match[2].length == 11) {
            return match[2];
        } else {
            return 'error';
        }
    }

    setVideoImage($('.video-link'));
});