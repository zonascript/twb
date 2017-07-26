$('#reg_birthdate').dateDropdowns({
    daySuffixes: false,
    defaultDateFormat: 'dd/mm/yyyy',
    dropdownClass: 'uk-select uk-width-small uk-form-small twb-round'
});

$('.nav-login').on('click', function(e) {
    e.preventDefault();
    $(this).blur();
    $('.btn-login').attr('data-type', 'login');
    var loginModal = UIkit.modal('#login-modal');
    clearLoginForm();
    loginModal.show();
})

$('.resetpwd-link').on('click', function(e) {
    e.preventDefault();
    $(this).blur();
    var resetModal = UIkit.modal('#reset-modal');
    cleanResetForm();
    resetModal.show();
})

$('#login-form').on('submit', function(e) {
    e.preventDefault();
    clearLoginForm();
    var formData = $('#login-form').serialize();
    var loginErrors = '';
    var loginType = $('.btn-login').attr('data-type');
    $.ajax({
        url: baseUrl + '/login',
        type: 'POST',
        data: formData,
        beforeSend: function( xhr ) {
            $('body').prepend(pageLoader);
        },
        success: function(data) {
            $('.twb-page-loader').remove();
            if (loginType == 'login') {
                location.reload();
            } else {
                showUploadModal();
            }
        },
        error: function(data) {
            console.log(data);
            $('.twb-page-loader').remove();
            var obj = $.parseJSON(data.responseText);
            if (obj.password) {
                $("#login_password").addClass("uk-form-danger");
                loginErrors += obj.password + '<br/>';
                $('#login_password').focus();
            }
            if (obj.email) {
                $("#login_email").addClass("uk-form-danger");
                loginErrors += obj.email + '<br/>';
                $('#login_email').focus();
            }
            if (loginErrors != '') {
                $('#login-errors').append('<p class="uk-alert uk-alert-danger">'+loginErrors+'</p>');
            }
            if (obj.error) {
                $("#login-errors").addClass("uk-form-danger");
                $('#form-login-errors').html(obj.error);
            }
        }
    });
});

$('#reset-form').on('submit', function(e) {
    e.preventDefault();
    cleanResetForm();
    $.ajax({
        url: baseUrl + '/password/email',
        type: 'POST',
        data: $('#reset-form').serialize(),
        beforeSend: function( xhr ) {
            $('body').prepend(pageLoader);
        },
        success: function(data) {
            $('.twb-page-loader').remove();
            $('#reset-form').empty();
            $('#reset-form').append('<p class="uk-alert uk-alert-success">Email telah dikirim.</p>');
        },
        error: function(data) {
            $('.twb-page-loader').remove();
            var obj = $.parseJSON(data.responseText);
            var errors = '';
            if (obj.email) {
                $("#reset_email").addClass("uk-form-danger");
                errors += obj.email + '<br/>';
                $('#reset_email').focus();
            }

            if (errors != '') {
                $('#reset-errors').append('<p class="uk-alert uk-alert-danger">'+errors+'</p>')
            }

            if (obj.error) {
                $("#reset-errors").addClass("uk-form-danger");
            }
        }
    });
});

$('#register-form').on('submit', function(e) {
    e.preventDefault();
    cleanRegisterForm();
    $.ajax({
        url: baseUrl + '/register',
        type: 'POST',
        data: $('#register-form').serialize(),
        beforeSend: function( xhr ) {
            $('body').prepend(pageLoader);
        },
        success: function(data) {
            $('.twb-page-loader').remove();
            let regType = $('.btn-register').attr('data-type');
            if (regType == 'login') {
                location.reload();
            } else {
                showUploadModal();
            }
        },
        error: function(data) {
            $('.twb-page-loader').remove();
            var obj = $.parseJSON(data.responseText);
            var errors = '';
            if (obj.password) {
                $("#reg_password").addClass("uk-form-danger");
                errors += obj.password + '<br/>';
                $('#reg_password').focus();
            }
            if (obj.email) {
                $("#reg_email").addClass("uk-form-danger");
                errors += obj.email + '<br/>';
                $('#reg_email').focus();
            }
            if (obj.city) {
                $("#reg_city").addClass("uk-form-danger");
                errors += obj.city + '<br/>';
                $('#reg_city').focus();
            }
            if (obj.address) {
                $("#reg_address").addClass("uk-form-danger");
                errors += obj.address + '<br/>';
                $('#reg_address').focus();
            }
            if (obj.birthdate) {
                $("#reg_birthdate").addClass("uk-form-danger");
                errors += obj.birthdate + '<br/>';
                $('#reg_birthdate').focus();
            }
            if (obj.name) {
                $("#reg_name").addClass("uk-form-danger");
                errors += obj.name + '<br/>';
                $('#reg_name').focus();
            }

            if (errors != '') {
                $('#reg-errors').append('<p class="uk-alert uk-alert-danger">'+errors+'</p>')
            }

            if (obj.error) {
                $("#reg-errors").addClass("uk-form-danger");
            }
        }
    });
});

$('.register-link').on('click', function(e) {
    $(this).blur();
    let loginType = $('.btn-login').attr('data-type');
    $('.btn-register').attr('data-type', loginType);
    UIkit.modal('#register-modal').show();
    cleanRegisterForm();
    $('#reg_name').focus();
});

function cleanResetForm() {
    $("#reset_email").removeClass("uk-form-danger");
    $('#reset-errors').empty();
}

function cleanRegisterForm() {
    $("#reg_email").removeClass("uk-form-danger");
    $("#reg_password").removeClass("uk-form-danger");
    $("#reg_name").removeClass("uk-form-danger");
    $("#reg_birthdate").removeClass("uk-form-danger");
    $("#reg_city").removeClass("uk-form-danger");
    $("#reg_address").removeClass("uk-form-danger");
    $('#reg-errors').empty();
}

function clearLoginForm() {
    $("#login_email").removeClass("uk-form-danger");
    $("#login_password").removeClass("uk-form-danger");
    $('#login-errors').empty();
}
