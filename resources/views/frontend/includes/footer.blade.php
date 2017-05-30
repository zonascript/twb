
        <footer class="twb-footer uk-flex uk-flex-middle">
            <a title="Back to Top" class="uk-margin-left" uk-scroll uk-tooltip><span uk-totop></span> <span class="uk-visible@m">Back to Top</span></a>
            <div class="uk-margin-large-left">
                Copyright &copy; <?php echo date('Y'); ?> <a class="" href="#" target="_blank" title="PT Tini Wini Biti">PT Tini Wini Biti</a> | All Rights Reserved
            </div>
            <div class="uk-visible@m">
                @include('frontend.includes.nav')
            </div>
        </footer>

    @include('frontend.includes.login-modal')
    @include('frontend.includes.register-modal')
    @include('frontend.includes.reset-modal')
    @section('page-level-js-variables')
        <script src="{!! asset('assets/js/uikit.2.min.js') !!}"></script>
        <script src="{!! asset('assets/js/datepicker.min.js') !!}"></script>
        <script type="text/javascript">
            var baseUrl = '{!! url('/') !!}';
            var token = '{!! csrf_token() !!}';
        </script>
        <script src="{!! asset('assets/js/login.js') !!}"></script>
        <script src="{!! asset('assets/js/twb.js') !!}"></script>
    @show
    <script src="{!! asset('assets/js/frontend.js') !!}"></script>
    @section('page-level-scripts')
    @show

    </body>
</html>
