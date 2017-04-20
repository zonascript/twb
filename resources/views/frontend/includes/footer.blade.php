
        <footer class="twb-footer uk-flex uk-flex-middle">
            <a title="Back to Top" uk-scroll uk-tooltip><span uk-totop></span> Back to Top</a>
            <div class="uk-margin-large-left">
                Copyright &copy; <?php echo date('Y'); ?> <a class="" href="#" target="_blank" title="PT Tini Wini Biti">PT Tini Wini Biti</a> | All Rights Reserved
            </div>
            <nav class="twb-nav uk-flex uk-flex-middle">
                <ul class="uk-subnav uk-margin-remove-bottom uk-margin-right">
                    <li><a href="">Seru Mewarnai</a></li>
                    <li><a href="">Berita &amp; Acara</a></li>
                    <li><a href="">Video</a></li>
                </ul>
                <ul class="twb-socmed">
                    <li><a href="" class="uk-icon-button" uk-icon="icon: instagram"></a></li>
                    <li><a href="" class="uk-icon-button" uk-icon="icon: facebook"></a></li>
                    <li><a href="" class="uk-icon-button" uk-icon="icon: twitter"></a></li>
                </ul>
            </nav>
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
