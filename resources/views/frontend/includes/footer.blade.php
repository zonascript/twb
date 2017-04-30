
        <footer class="twb-footer uk-flex uk-flex-middle">
            <a title="Back to Top" class="uk-margin-left" uk-scroll uk-tooltip><span uk-totop></span> Back to Top</a>
            <div class="uk-margin-large-left">
                Copyright &copy; <?php echo date('Y'); ?> <a class="" href="#" target="_blank" title="PT Tini Wini Biti">PT Tini Wini Biti</a> | All Rights Reserved
            </div>
            @include('frontend.includes.nav')
        </footer>

    @section('page-level-js-variables')
        <script type="text/javascript">
            var baseUrl = '{!! url('/') !!}';
            var token = '{!! csrf_token() !!}';
        </script>
    @show
    <script src="{!! asset('assets/js/frontend.js') !!}"></script>
    @section('page-level-scripts')
    @show

    </body>
</html>
