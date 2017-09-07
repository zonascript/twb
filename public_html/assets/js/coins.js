function loadGallery(url, ajaxBaseUrl, searchText) {
    ajaxUrl = baseUrl + '/' + url;
    $.ajax({
        url: ajaxUrl,
        data: { 'searchtext' : searchText },
        beforeSend: function( xhr ) {
            $('.gallery-container').html('<div class="uk-height-small uk-width-1-1 uk-position-relative uk-text-center loader" style="min-height:250px;">'+ loader +'</div>');
        }
    }).done(function(result) {
        var $res = $.parseJSON(result);
        //console.log($res);
        if($res.total > 0) {
            setTimeout(function() {
                generateGallery($res, ajaxBaseUrl, searchText);
                $('.loader').remove();
            }, 300);
        } else {
            $('.loader').remove();
            generateEmptyGallery();
        }
    });
}

function generateGallery($res, url, searchText) {
    generateNav($res, url, 'gallery', searchText);
    generateGalleryContent($res.data);
}

function generateEmptyGallery() {
    blankContent = '<div class="uk-width-1-1 uk-height-small">Tidak ada data</div>';
    $('.gallery-container').empty();
    $('.gallery-container').append(blankContent);
    $('.gallery-nav-container').empty();
}

function generateGalleryContent($data) {
    // console.log($data);
    var galleryContent = '';
    $.each($data, function (index, gallery) {
        // console.log(gallery.user.name);
        var userId = gallery.user_id;
        // var birthdate = moment(gallery.user_birthdate, 'YYYY-MM-DD');
        // var age = moment().diff(birthdate, 'years');
        galleryContent += '<li>' +
            '<div class="dm-user-gallery">' +
                '<a href="'+baseUrl+'/dunia-main/album/'+userId+'" class="dm-thumb-user" title="'+gallery.user.name+'">' +
                    '<span class="dm-thumb-user-img uk-border-circle uk-background-cover" style="background-image: url('+baseUrl+'/'+gallery.file_path+')"></span>' +
                '</a>' +
                '<div>'+gallery.user.name+'</div>' +
                '<div>'+gallery.total_score+'/15</div>' +
            '</div>' +
        '</li>';
    })
    $('.gallery-container').empty();
    $('.gallery-container').append(galleryContent);
}


function generateNav($res, templateUrl, prefix, searchText) {
    let navItems = '';
    //console.log($res);
    // API details
    let total = $res.total;
    let perPage = $res.per_page;
    let lastPage = $res.last_page;
    let currentPage = $res.current_page;
    let prevUrl = ($res.prev_page_url != null ? $res.prev_page_url : '');
    let nextUrl = ($res.next_page_url != null ? $res.next_page_url : '');
    let prevClass = prevUrl == '' ? 'uk-disabled' : '';
    let nextClass = nextUrl == '' ? 'uk-disabled' : '';
    if (prevUrl != '') {
        navItems += '<li><a href="javascript:;" class="'+prefix+'-nav-button '+prevClass+'" data-link="'+prevUrl+'"><span uk-pagination-previous></span></a></li>';
    }
    //loop the page number
    if (total > perPage) {
        for (start=1; start <= lastPage; start++) {
            let active = '';
            if (start == currentPage) {
                active = 'uk-active';
            }
            navItems += '<li><a href="javascript:;" class="'+prefix+'-nav-button '+active+'" title="Page '+start+'" data-link="'+templateUrl+'?page='+start+'"><span>'+start+'</span></a></li>';
        }
    }
    if (nextUrl != '') {
        navItems += '<li><a href="javascript:;" class="'+prefix+'-nav-button '+nextClass+'" data-link="'+nextUrl+'"><span uk-pagination-next></span></a></li>';
    }

    $('.'+prefix+'-nav-container').empty();
    $('.'+prefix+'-nav-container').append(navItems);

    $('.'+prefix+'-nav-button').on('click', function() {
        let url = $(this).attr('data-link');
        //console.log(url);
        if (url != '#' && url != '') {
            if (prefix == 'template') {
                loadTemplate(url, templateUrl);
            }
            if (prefix == 'gallery') {
                loadGallery(url, templateUrl, searchText);
            }
        }
    });
}
