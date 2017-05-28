$(document).ready(function() {
    // pop coloring
    // $('a.zoom').on('click', function(e) {
    //     e.preventDefault();
    //     $(this).blur();
    //     var img = $(this).closest('div.twb-color-bw').find('img').prop('src');
    //     var txt = $(this).closest('div.info').find('h6').text();
    //     var modal = '<button class="uk-modal-close-outside" type="button" uk-close></button>' +
    //     '<img src="'+img+'" class="twb-popimg">' +
    //     '<div class="uk-padding-small uk-flex uk-flex-middle uk-flex-between">' +
    //         '<div>'+ txt +'</div>' +
    //         '<ul class="uk-subnav uk-subnav-divider uk-margin-remove">' +
    //             '<li><a href="" class="uk-text-capitalize" title="Print"><i class="fa fa-print"></i> Print</a></li>' +
    //             '<li><a href="'+img+'" class="uk-text-capitalize" title="Download" target="_blank"><i class="fa fa-download"></i> Download</a></li>' +
    //         '</ul>' +
    //     '</div>';
    //     var uikitModal = UIkit.modal.dialog(modal);
    // });

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

    // $('#image-preview').addClass('uk-hidden');
    $("#file").change(function () {
        filePreview(this);
    });

    $('#upload-form').ajaxForm({
        beforeSubmit: function (data) {
            clearUploadForm();
        },
        success: function(data) {
            alert('Image Upload Successfully.');
            UIkit.modal('#upload-modal').hide();
        },
        error: function(data) {
            var obj = $.parseJSON(data.responseText);
            printErrorMsg(obj);
        }
    });

    //
    // var bar = $("#progressbar")[0];
    // UIkit.upload('.twb-upload', {
    //
    //     url: '',
    //     multiple: false,
    //     allow : '*.(jpg|jpeg|png)',
    //     msgInvalidName: 'Format file tidak sesuai, harap gunakan format %s',
    //
    //     beforeSend: function() { console.log('beforeSend', arguments); },
    //     beforeAll: function() { console.log('beforeAll', arguments); },
    //     load: function() { console.log('load', arguments); },
    //     error: function() { console.log('error', arguments); },
    //     complete: function() { console.log('complete', arguments); },
    //
    //     loadStart: function (e) {
    //         console.log('loadStart', arguments);
    //
    //         bar.removeAttribute('hidden');
    //         bar.max =  e.total;
    //         bar.value =  e.loaded;
    //     },
    //
    //     progress: function (e) {
    //         console.log('progress', arguments);
    //
    //         bar.max =  e.total;
    //         bar.value =  e.loaded;
    //
    //     },
    //
    //     loadEnd: function (e) {
    //         console.log('loadEnd', arguments);
    //
    //         bar.max =  e.total;
    //         bar.value =  e.loaded;
    //     },
    //
    //     completeAll: function () {
    //         console.log('completeAll', arguments);
    //
    //         setTimeout(function () {
    //             bar.setAttribute('hidden', 'hidden');
    //         }, 1000);
    //         $('#image-preview').removeClass('uk-hidden');
    //
    //     }
    // });
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
    var txt = $($this).closest('div.twb-color-bw').find('h6').text();
    var modal = '<button class="uk-modal-close-outside" type="button" uk-close></button>' +
    '<img src="'+img+'" class="twb-popimg">' +
    '<div class="uk-padding-small uk-flex uk-flex-middle uk-flex-between">' +
        '<div class="uk-width-expand">'+ txt +'</div>' +
        '<ul class="uk-subnav uk-subnav-divider uk-margin-remove uk-width-auto">' +
            '<li><a href="" class="uk-text-capitalize" title="Print"><i class="fa fa-print"></i> Print</a></li>' +
            '<li><a href="'+img+'" class="uk-text-capitalize" title="Download" target="_blank"><i class="fa fa-download"></i> Download</a></li>' +
        '</ul>' +
    '</div>';
    var uikitModal = UIkit.modal.dialog(modal);
}
