$(document).ready(function() {

    // pop coloring
    $('a.zoom').on('click', function(e) {
        e.preventDefault();
        $(this).blur();
        var img = $(this).closest('div.twb-color-bw').find('img').prop('src');
        var txt = $(this).closest('div.info').find('h6').text();
        var modal = '<button class="uk-modal-close-outside" type="button" uk-close></button>' +
        '<img src="'+img+'" class="twb-popimg">' +
        '<div class="uk-padding-small uk-flex uk-flex-middle uk-flex-between">' +
            '<div>'+ txt +'</div>' +
            '<ul class="uk-subnav uk-subnav-divider uk-margin-remove">' +
                '<li><a href="" class="uk-text-capitalize" title="Print"><i class="fa fa-print"></i> Print</a></li>' +
                '<li><a href="'+img+'" class="uk-text-capitalize" title="Download" target="_blank"><i class="fa fa-download"></i> Download</a></li>' +
            '</ul>' +
        '</div>';
        var uikitModal = UIkit.modal.dialog(modal);
    });

    // pop galeri
    $('a.thumb').on('click', function(e) {
        e.preventDefault();
        $(this).blur();
        var img = $(this).find('img').prop('src');
        var txt = $(this).closest('div.twb-color').find('h6').text();
        var person = $(this).closest('div.twb-color').find('.person').text();
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
    });

    // pop login
    $('a.login').on('click', function(e) {
        e.preventDefault();
        $(this).blur();
        UIkit.modal('#login-modal').show();
    });

    $('a.upload').on('click', function(e) {
        e.preventDefault();
        $(this).blur();
        showUploadModal();
    })

    $('.btn-login').on('click', function() {
        $.ajax({
            url: baseUrl + '/ajax-login',
            type: 'post',
            data: $('#login-form').serialize()
        }).done(function(res) {
            if(res) {
                showUploadModal();
            }
        });
    });

    $('a.notmember').on('click', function(e) {
        $(this).blur();
        UIkit.modal('#register-modal').show();
    });

    // pop upload
    $('a.upload').on('click', function(e) {
        e.preventDefault();
        $(this).blur();
        showUploadModal();
    });

    function showUploadModal() {
        UIkit.modal('#upload-modal').show();
        $('#upload-modal').on('hidden', function() {
            location.reload();
        });
    }

    $("#file").change(function () {
        filePreview(this);
    });

    function filePreview(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();
            reader.onload = function (e) {
                $('#image-preview').empty();
                $('#image-preview').append('<img src="'+e.target.result+'" width="450" height="300"/>');
            }
            reader.readAsDataURL(input.files[0]);
        }
    }
});
