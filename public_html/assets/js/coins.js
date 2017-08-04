function loadGallery(url, ajaxBaseUrl) {
    ajaxUrl = baseUrl + '/' + url;
    $.ajax({
        url: ajaxUrl,
        beforeSend: function( xhr ) {
            $('.gallery-container').html('<div class="uk-height-small uk-width-1-1 uk-position-relative uk-text-center loader" style="min-height:250px;">'+ loader +'</div>');
        }
    }).done(function(result) {
        var $res = $.parseJSON(result);
        // console.log($res);
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
    blankContent = '<div class="uk-width-1-1 uk-height-small">Tidak ada data</div>';
    $('.gallery-container').empty();
    $('.gallery-container').append(blankContent);
}

function generateGalleryContent($data) {
    // console.log($data);
    var galleryContent = '';
    $.each($data, function (index, gallery) {
        var userId = gallery.user_id;
        // var birthdate = moment(gallery.user_birthdate, 'YYYY-MM-DD');
        // var age = moment().diff(birthdate, 'years');
        galleryContent += '<li>' +
            '<div class="dm-user-gallery">' +
                '<a href="'+baseUrl+'/dunia-main/album/'+userId+'" class="dm-thumb-user" title="'+gallery.user.name+'">' +
                    '<img class="uk-border-circle" src="'+baseUrl+'/'+gallery.file_path+'" width="100" height="100" alt="'+gallery.user.name+'">' +
                '</a>' +
                '<div>'+gallery.user.name+'</div>' +
                '<div>'+gallery.total_score+'/15</div>' +
            '</div>' +
        '</li>';
    })
    $('.gallery-container').empty();
    $('.gallery-container').append(galleryContent);
}


function generateNav($res, templateUrl, prefix) {
    let navItems = '';
    // API details
    let total = $res.total;
    let perPage = $res.per_page;
    let lastPage = $res.last_page;
    let currentPage = $res.current_page;
    let prevUrl = ($res.prev_page_url != null ? $res.prev_page_url : '');
    let nextUrl = ($res.next_page_url != null ? $res.next_page_url : '');
    let prevClass = prevUrl == '' ? 'uk-disabled' : '';
    let nextClass = nextUrl == '' ? 'uk-disabled' : '';
    navItems += '<li><a href="javascript:;" class="'+prefix+'-nav-button '+prevClass+'" data-link="'+prevUrl+'"><span uk-pagination-previous></span></a></li>';
    //loop the page number
    if (total > perPage) {
        for (start=1; start <= lastPage; start++) {
            let active = '';
            if (start == currentPage) {
                active = 'uk-active';
            }
            navItems += '<li><a href="javascript:;" class="'+prefix+'-nav-button '+active+'" data-link="'+templateUrl+'?page='+start+'"><span>'+start+'</span></a></li>';
        }
    }
    navItems += '<li><a href="javascript:;" class="'+prefix+'-nav-button '+nextClass+'" data-link="'+nextUrl+'"><span uk-pagination-next></span></a></li>';

    $('.'+prefix+'-nav-container').empty();
    $('.'+prefix+'-nav-container').append(navItems);

    $('.'+prefix+'-nav-button').on('click', function() {
        let url = $(this).attr('data-link');
        console.log(url);
        if (url != '#' && url != '') {
            if (prefix == 'template') {
                loadTemplate(url, templateUrl);
            }
            if (prefix == 'gallery') {
                loadGallery(url, templateUrl);
            }
        }
    });
}