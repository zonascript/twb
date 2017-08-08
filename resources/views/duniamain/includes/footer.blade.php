    <footer class="uk-container">
        <div class="uk-flex uk-flex-middle uk-flex-between">
            <div class="uk-width-1-2">
                Copyright © 2017 PT Konimex | All Rights Reserved
            </div>
            <div class="dm-socmed">
                <a href="https://www.instagram.com/tiniwinibiti.id/" target="_blank" class="uk-icon-button" uk-icon="icon: instagram" title="Follow us on Instagram"></a>
                <a href="https://www.facebook.com/tiniwinibiti.id/" target="_blank" class="uk-icon-button" uk-icon="icon: facebook" title="Follow us on Facebook"></a>
                {{--<a href="#" class="uk-icon-button" uk-icon="icon: twitter" title="Follow us on Twitter"></a>--}}
            </div>
        </div>
    </footer>

    @include('frontend.includes.login-modal')
    @include('duniamain.includes.register-modal')
    @include('frontend.includes.reset-modal')

    @section('page-level-js-variables')
        <script type="text/javascript">
            var loader = '<div class="uk-position-center"><div uk-spinner></div></div>';
            var pageLoader = '<div class="uk-overlay-primary uk-position-cover twb-page-loader"><div class="uk-position-center uk-flex uk-flex-center uk-text-center"><div uk-spinner></div><div class="white-text">Loading...</div></div></div>';
            var baseUrl = '{!! url('/') !!}';
            var token = '{!! csrf_token() !!}';
            UIkit.tooltip('a','show');
        </script>
        <script src="{!! asset('assets/js/uikit.2.min.js') !!}"></script>
        <script src="{!! asset('assets/js/datepicker.min.js') !!}"></script>
        <script src="{!! asset('assets/js/jquery.date-dropdown.js') !!}"></script>
        <script src="{!! asset('assets/js/login.js') !!}"></script>
    @show
    @section('page-level-scripts')
    @show

    </body>
</html>
