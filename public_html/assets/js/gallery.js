function loadGallery(url, ajaxBaseUrl) {
    galleryUrl = baseUrl + '/' + url;
    $.ajax({
        url: galleryUrl,
        beforeSend: function( xhr ) {
            $('.gallery-container').html('<div class="uk-height-small uk-width-1-1 uk-position-relative uk-text-center loader">'+ loader +'</div>');
        }
    }).done(function(result) {
        let $res = $.parseJSON(result);
        if($res.total > 0) {
            setTimeout(function() {
                generateGallery($res, ajaxBaseUrl);
                $('.loader').remove();
            }, 300);
        } else {
            $('.loader').remove();
            generateEmptyGallery();
        }
    });
}

function generateGallery($res, url) {
    generateNav($res, url, 'gallery');
    generateGalleryContent($res.data);
}

function generateEmptyGallery() {
    blankContent = '<div class="uk-panel uk-padding-small white twb-border-bottom">' +
        '<p>Tidak ada data.</p>' +
        '</div>';
    $('.gallery-container').empty();
    $('.gallery-container').append(blankContent);
}

function generateGalleryContent($data) {
    let galleryContent = '';
    $.each($data, function (index, gallery) {
        let birthdate = moment(gallery.user_birthdate, 'YYYY-MM-DD');
        let age = moment().diff(birthdate, 'years');
        galleryContent += '<div>' +
            '<div class="twb-color">' +
                    '<a class="uk-cover-container thumb">' +
                    '<img src="'+baseUrl+'/'+gallery.file_path+'" alt="Tini Wini Biti" uk-cover>' +
                '</a>' +
                '<div class="info uk-margin-small-top">' +
                    '<h6 class="uk-margin-remove uk-text-uppercase">'+gallery.title+'</h6>' +
                   '<div class="person"><strong>'+gallery.user_name+'</strong>, '+age+' Tahun, '+gallery.user_city+'</div>' +
                '</div>' +
            '</div>' +
        '</div>';
    })
    $('.gallery-container').empty();
    $('.gallery-container').append(galleryContent);
}