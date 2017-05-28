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
                '<a class="uk-cover-container thumb" onclick="zoomGallery(this)">' +
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

// pop galeri
function zoomGallery($this) {
    var img = $($this).find('img').prop('src');
    var txt = $($this).closest('div.twb-color').find('h6').text();
    var person = $($this).closest('div.twb-color').find('.person').text();
    var modal = '<button class="uk-modal-close-outside" type="button" uk-close></button>' +
        '<img src="'+img+'" class="twb-popimg">' +
        '<div class="uk-padding-small">' +
        '<h6 class="uk-margin-remove">'+ txt +'</h6>' +
        '<div class="uk-flex uk-flex-middle uk-flex-between">' +
        '<div>'+ person +'</div>' +
        '<ul class="uk-subnav uk-subnav-divider uk-margin-remove">' +
        '<li><a href="" class="uk-text-capitalize" title="Print"><i class="fa fa-print"></i> Print</a></li>' +
        '<li><a href="'+img+'" class="uk-text-capitalize" title="Download" target="_blank"><i class="fa fa-download"></i> Download</a></li>' +
        '</ul>' +
        '</div>' +
        '</div>';
    var uikitModal = UIkit.modal.dialog(modal);
}