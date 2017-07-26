    <footer class="uk-container">
        <div class="uk-flex uk-flex-middle uk-flex-between">
            <div>
                Copyright © 2017 PT Tini Wini Biti | All Rights Reserved
            </div>
            <div class="dm-socmed">
                <a href="#" class="uk-icon-button" uk-icon="icon: instagram" title="Follow us on Instagram"></a>
                <a href="#" class="uk-icon-button" uk-icon="icon: facebook" title="Follow us on Facebook"></a>
                <a href="#" class="uk-icon-button" uk-icon="icon: twitter" title="Follow us on Twitter"></a>
            </div>
        </div>
    </footer>
    @section('page-level-js-variables')
        <script type="text/javascript">
            var baseUrl = '{!! url('/') !!}';
            var token = '{!! csrf_token() !!}';
            UIkit.tooltip('a','show');
        </script>
    @show
    @section('page-level-scripts')
    @show

    </body>
</html>
