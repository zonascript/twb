function loadTemplate(url) {
    templateUrl = baseUrl + '/' + url;
    $.ajax({
        url: templateUrl,
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
                generateTemplate($res, url);
            }, 500);
        } else {
            //stop the animation
            generateEmptyTemplate();
        }
    });
}

function generateTemplate($res, url) {
    generateNav($res, url);
    generateTemplateContent($res.data);
}

function generateEmptyTemplate() {
    blankContent = '<div class="uk-panel uk-padding-small white twb-border-bottom">' +
        '<p>Tidak ada data.</p>' +
        '</div>';
    $('.template-container').empty();
    $('.template-container').append(blankContent);
}

function generateTemplateContent($data) {
    let templateContent = '';
    $.each($data, function (index, template) {
        templateContent += '<div>' +
            '<div class="twb-color-bw">' +
                '<div class="uk-cover-container thumb">' +
                    '<a class="zoom" title="zoom" onclick="zoomColoring(this)">' +
                        '<img src="'+template.fullpath+'" alt="'+template.title+'" />' +
                    '</a>' +
                '</div>' +
                '<div class="info uk-padding-small">' +
                    '<h6 class="twb-blue-text uk-margin-remove">'+template.title+'</h6>' +
                    '<ul class="uk-subnav uk-subnav-divider uk-margin-remove">' +
                        '<li><a class="uk-text-capitalize zoom" title="Zoom" onclick="zoomColoring(this)">Zoom +</a></li>' +
                        '<li><a href="" class="uk-text-capitalize" title="">Print</a></li>' +
                        '<li><a href="" class="uk-text-capitalize" title="">Download</a></li>' +
                    '</ul>' +
                '</div>' +
            '</div>' +
            '</div>';
    })
    $('.template-container').empty();
    $('.template-container').append(templateContent);
}

function generateNav($res, templateUrl) {
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
    navItems += '<li><a href="javascript:;" class="template-nav-button '+prevClass+'" data-link="'+prevUrl+'"><span uk-pagination-previous></span></a></li>';
    //loop the page number
    if (total > perPage) {
        for (start=1; start <= lastPage; start++) {
            let active = '';
            if (start == currentPage) {
                active = 'uk-active';
            }
            navItems += '<li><a href="javascript:;" class="template-nav-button '+active+'" data-link="'+templateUrl+'?page='+start+'"><span>'+start+'</span></a></li>';
        }
    }
    navItems += '<li><a href="javascript:;" class="template-nav-button '+nextClass+'" data-link="'+nextUrl+'"><span uk-pagination-next></span></a></li>';

    $('.template-nav-container').empty();
    $('.template-nav-container').append(navItems);

    $('.template-nav-button').on('click', function() {
        let url = $(this).attr('data-link');
        if (url != '#' && url != '') {
            loadTemplate(url);
        }
    });
}