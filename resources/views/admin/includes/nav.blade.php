<nav class="uk-navbar-container k-topnav" uk-navbar uk-sticky>

    <div class="uk-navbar-left">
        <a class="uk-navbar-item uk-logo" href="{!! route('admin') !!}">
            <img class="uk-border-circle" src="{!! asset('assets/img/admin/favicon.png') !!}" width="30" height="30" alt="Sitename">
        </a>
        <h1 class="k-title-page uk-text-uppercase">@if(isset($pageTitle)) {!! $pageTitle !!}@endif</h1>
    </div>

    <div class="uk-navbar-right uk-margin-right">
        <ul class="uk-navbar-nav">
            {{--<li><a href="#">Hi, {!! \Auth::user()->name !!}</a></li>--}}
            <li>
                {{--<a class="uk-navbar-item" href="#">--}}
                    {{--<img class="uk-border-circle" src="https://d2rbodpj0xodc.cloudfront.net/users/753534074538166240/avatar/84b19e98-5696-4a37-8283-4f3b532d2a01-150x150.jpeg" width="30" height="30" alt="username">--}}
                {{--</a>--}}
                <a href="#">Hi, {!! \Auth::user()->name !!}</a>
                <div class="uk-navbar-dropdown uk-width-medium" uk-drop="offset: 0">
                    <ul class="uk-nav uk-navbar-dropdown-nav">
                        {{--<li><a href="{!! action('UserController@profile') !!}"><span class="uk-margin-small-right" uk-icon="icon: user"></span> My Profile</a></li>--}}
                        <li><a href="{!! url('/logout') !!}"><span class="uk-margin-small-right" uk-icon="icon: sign-out"></span> Logout</a></li>
                    </ul>
                </div>
            </li>
        </ul>
    </div>

</nav>
