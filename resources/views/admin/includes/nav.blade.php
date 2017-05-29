<nav class="uk-navbar-container k-topnav" uk-navbar uk-sticky>

    <div class="uk-navbar-left">
        <a class="uk-navbar-item uk-logo" href="{!! route('admin') !!}">
            <img class="uk-border-circle" src="{!! asset('assets/img/admin/favicon.png') !!}" width="30" height="30" alt="Sitename">
        </a>
        <h1 class="k-title-page uk-text-uppercase">@if(isset($pageTitle)) {!! $pageTitle !!}@endif</h1>
    </div>

    <div class="uk-navbar-right uk-margin-right">
        <ul class="uk-navbar-nav uk-subnav-divider">
            <li><span class="uk-margin-medium-right">Hi, {!! \Auth::user()->name !!}</span></li>
            <li><a href="{!! url('/logout') !!}">Logout <span class="uk-margin-small-left" uk-icon="icon: sign-out"></span></a></li>
        </ul>
    </div>
</nav>
