$(document).ready(function() {
    // pop login
    $('a.login').on('click', function(e) {
        e.preventDefault();
        $(this).blur();
        clearLoginForm();
        $('.btn-login').attr('data-type', 'upload');
        $('.register-link').attr('data-type', 'upload');
        var loginModal = UIkit.modal('#login-modal');
        loginModal.show();
    });

    $('a.upload').on('click', function(e) {
        e.preventDefault();
        $(this).blur();
        showUploadModal();
    });

    // pop upload
    $('a.upload').on('click', function(e) {
        e.preventDefault();
        $(this).blur();
        showUploadModal();
    });

    $("#file").change(function () {
        filePreview(this);
    });

    $('#upload-form').ajaxForm({
        beforeSubmit: function (data) {
            clearUploadForm();
        },
        beforeSend: function( xhr ) {
            $('body').prepend(pageLoader);
        },
        success: function(data) {
            $('.twb-page-loader').remove();
            UIkit.modal('#upload-modal').hide();
            location.reload();
        },
        error: function(data) {
            $('.twb-page-loader').remove();
            var obj = $.parseJSON(data.responseText);
            printErrorMsg(obj);
        }
    });

});

function showUploadModal() {
    UIkit.modal('#upload-modal').show();
    clearUploadForm();
    $('#upload-modal').on('hidden', function() {
        if (isLoggedIn == 'false') location.reload();
    });
}

// filePreview('#file');
function filePreview(input) {
    if (input.files && input.files[0]) {
        var reader = new FileReader();
        reader.onload = function (e) {
            $('#image-preview').empty();
            $('#image-preview').append('<img src="'+e.target.result+'" style="height:40vh;">');
        }
        reader.readAsDataURL(input.files[0]);
    }
}

function printErrorMsg(obj) {
    console.log(obj);
    var errors = '';
    if (obj.file) {
        if (obj.file.length > 0) {
            $.each( obj.file, function( key, value ) {
                errors += value + '<br/>';
            })
        } else {
            errors += obj.file + '<br/>';
        }
        $("#file").addClass("uk-form-danger");
        $('#file').focus();
    }
    if (obj.title) {
        $("#title").addClass("uk-form-danger");
        errors += obj.title + '<br/>';
        $('#title').focus();
    }
    if (errors != '') {
        $('#upload-errors').append('<p class="uk-alert uk-alert-danger">'+errors+'</p>')
    }
}

function clearUploadForm() {
    $("#title").removeClass("uk-form-danger");
    $("#file").removeClass("uk-form-danger");
    $('#upload-errors').empty();
}

function zoomColoring($this) {
    var img = $($this).closest('div.twb-color-bw').find('img').prop('src');
    var pdf = $($this).closest('div.twb-color-bw').find('.template-file').prop('href');
    var txt = $($this).closest('div.twb-color-bw').find('h6').text();
    var modal = '<button class="uk-modal-close-outside" type="button" uk-close></button>' +
    '<img src="'+img+'" class="twb-popimg">' +
    '<div class="uk-padding-small uk-flex uk-flex-middle uk-flex-between">' +
        '<div class="uk-width-expand">'+ txt +'</div>' +
        '<ul class="uk-subnav uk-subnav-divider uk-margin-remove uk-width-auto">' +
            // '<li><a href="" class="uk-text-capitalize" title="Print"><i class="fa fa-print"></i> Print</a></li>' +
            '<li><a href="'+pdf+'" class="uk-text-capitalize" title="Download" target="_blank"><i class="fa fa-download"></i> Download</a></li>' +
        '</ul>' +
    '</div>';
    var uikitModal = UIkit.modal.dialog(modal);
}
