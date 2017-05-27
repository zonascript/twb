
        <footer class="twb-footer uk-flex uk-flex-middle">
            <a title="Back to Top" class="uk-margin-left" uk-scroll uk-tooltip><span uk-totop></span> Back to Top</a>
            <div class="uk-margin-large-left">
                Copyright &copy; <?php echo date('Y'); ?> <a class="" href="#" target="_blank" title="PT Tini Wini Biti">PT Tini Wini Biti</a> | All Rights Reserved
            </div>
            @include('frontend.includes.nav')
        </footer>

    @include('frontend.includes.login-modal')
    @include('frontend.includes.register-modal')
    @section('page-level-js-variables')
        <script src="{!! asset('assets/js/uikit.2.min.js') !!}"></script>
        <script src="{!! asset('assets/js/datepicker.min.js') !!}"></script>
        <script type="text/javascript">
            var baseUrl = '{!! url('/') !!}';
            var token = '{!! csrf_token() !!}';

            $('.nav-login').on('click', function(e) {
                e.preventDefault();
                $(this).blur();
                // UIkit.modal('#login-modal').show();
                var loginModal = UIkit.modal('#login-modal');
                // $('#login-modal').on('shown', function(){});
                clearLoginForm();
                loginModal.show();
            })

            $('.btn-login').on('click', function() {
                clearLoginForm();
                var formData = $('#login-form').serialize();
                var loginErrors = '';
                $.ajax({
                    url: baseUrl + '/login',
                    type: 'POST',
                    data: formData,
                    success: function(data) {
                        location.reload();
                    },
                    error: function(data) {
                        var obj = $.parseJSON(data.responseText);
                        if (obj.password) {
                            $("#login_password").addClass("uk-form-danger");
                            // $('#login-errors').append('<p class="uk-alert uk-alert-danger">'+obj.password+'</p>')
                            loginErrors += obj.password + '<br/>';
                            $('#login_password').focus();
                        }
                        if (obj.email) {
                            $("#login_email").addClass("uk-form-danger");
                            // $('#login-errors').append('<p class="uk-alert uk-alert-danger">'+obj.email+'</p>')
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

            $('.btn-register').on('click', function() {
                cleanRegisterForm();
                $.ajax({
                    url: baseUrl + '/register',
                    type: 'POST',
                    data: $('#register-form').serialize(),
                    success: function(data) {
                        location.reload();
                    },
                    error: function(data) {
                        var obj = $.parseJSON(data.responseText);
                        var errors = '';
                        if (obj.password) {
                            $("#reg_password").addClass("uk-form-danger");
                            //$('#reg-errors').append('<p class="uk-alert uk-alert-danger">'+obj.password+'</p>')
                            errors += obj.password + '<br/>';
                            $('#reg_password').focus();
                        }
                        if (obj.email) {
                            $("#reg_email").addClass("uk-form-danger");
                            //$('#reg-errors').append('<p class="uk-alert uk-alert-danger">'+obj.email+'</p>')
                            errors += obj.email + '<br/>';
                            $('#reg_email').focus();
                        }
                        if (obj.city) {
                            $("#reg_city").addClass("uk-form-danger");
                            //$('#reg-errors').append('<p class="uk-alert uk-alert-danger">'+obj.city+'</p>')
                            errors += obj.city + '<br/>';
                            $('#reg_city').focus();
                        }
                        if (obj.address) {
                            $("#reg_address").addClass("uk-form-danger");
                            //$('#reg-errors').append('<p class="uk-alert uk-alert-danger">'+obj.address+'</p>')
                            errors += obj.address + '<br/>';
                            $('#reg_address').focus();
                        }
                        if (obj.birthdate) {
                            $("#reg_birthdate").addClass("uk-form-danger");
                            //$('#reg-errors').append('<p class="uk-alert uk-alert-danger">'+obj.birthdate+'</p>')
                            errors += obj.birthdate + '<br/>';
                            $('#reg_birthdate').focus();
                        }
                        if (obj.name) {
                            $("#reg_name").addClass("uk-form-danger");
                            //$('#reg-errors').append('<p class="uk-alert uk-alert-danger">'+obj.name+'</p>')
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

            $('a.notmember').on('click', function(e) {
                $(this).blur();
                UIkit.modal('#register-modal').show();
                cleanRegisterForm();
                $('#reg_name').focus();
            });

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

        </script>
    @show
    <script src="{!! asset('assets/js/frontend.js') !!}"></script>
    @section('page-level-scripts')
    @show

    </body>
</html>
