<nav class="twb-nav uk-flex uk-flex-middle">
    <ul class="uk-subnav uk-margin-remove-bottom uk-margin-right uk-visible@s">
        <li @if(isset($navActiveColoring)) {!! $navActiveColoring !!} @endif>
            <a href="{!! url('/seru-mewarnai') !!}" title="Seru Mewarnai">Seru Mewarnai</a>
        </li>
        <li @if(isset($navActiveNews)) {!! $navActiveNews !!} @endif>
            <a href="{!! url('/berita') !!}" title="Berita &amp; Acara">Berita &amp; Acara</a>
        </li>
        <li @if(isset($navActiveVid)) {!! $navActiveVid !!} @endif>
            <a href="{!! url('/video') !!}" title="Video">Video</a>
        </li>
        @if (auth()->check())
        <li @if(isset($navActiveProfile)) {!! $navActiveProfile !!} @endif>
            <a href="{!! url('/account') !!}" title="Profile">My Account</a>
            <div uk-dropdown>
                <ul class="uk-nav uk-navbar-dropdown-nav">
                    <li><a href="{!! url('/account') !!}"><span class="uk-margin-small-right" uk-icon="icon: user"></span> My Account</a></li>
                    <li><a href="{!! url('/logout') !!}"><span class="uk-margin-small-right" uk-icon="icon: sign-out"></span> Logout</a></li>
                </ul>
            </div>
        </li>
        @else
        <li>
            <a href="javascript:;" title="Login" class="nav-login">Login</a>
        </li>
        @endif
    </ul>
    <ul class="twb-socmed uk-visible@s">
        <li><a target="_blank" href="https://www.instagram.com/tiniwinibiti.id/" class="uk-icon-button" uk-icon="icon: instagram"></a></li>
        <li><a target="_blank" href="https://www.facebook.com/tiniwinibiti.id/" class="uk-icon-button" uk-icon="icon: facebook"></a></li>
        <li><a target="_blank" href="" class="uk-icon-button" uk-icon="icon: twitter"></a></li>
    </ul>
    <a href="#mobilenav" class="uk-hidden@s white-text" uk-toggle uk-icon="icon: menu"></a>
</nav>

<div id="mobilenav" uk-offcanvas="flip: true; overlay: true;">
    <div class="uk-offcanvas-bar"  class="uk-light">
        <ul class="uk-nav uk-nav-default">
            <li @if(isset($navActiveColoring)) {!! $navActiveColoring !!} @endif>
                <a href="{!! url('/seru-mewarnai') !!}" title="Seru Mewarnai">Seru Mewarnai</a>
            </li>
            <li @if(isset($navActiveNews)) {!! $navActiveNews !!} @endif>
                <a href="{!! url('/berita') !!}" title="Berita &amp; Acara">Berita &amp; Acara</a>
            </li>
            <li @if(isset($navActiveVid)) {!! $navActiveVid !!} @endif>
                <a href="{!! url('/video') !!}" title="Video">Video</a>
            </li>
            @if (auth()->check())
            <li @if(isset($navActiveProfile)) {!! $navActiveProfile !!} @endif>
                <a href="{!! url('/account') !!}" title="Profile">My Account</a>
                <div uk-dropdown>
                    <ul class="uk-nav uk-navbar-dropdown-nav">
                        <li><a href="{!! url('/account') !!}"><span class="uk-margin-small-right" uk-icon="icon: user"></span> My Account</a></li>
                        <li><a href="{!! url('/logout') !!}"><span class="uk-margin-small-right" uk-icon="icon: sign-out"></span> Logout</a></li>
                    </ul>
                </div>
            </li>
            @else
            <li>
                <a href="javascript:;" title="Login" class="nav-login">Login</a>
            </li>
            @endif
            {{-- @if(logged) --}}
            {{-- <li @if(isset($navActiveProfile)) {!! $navActiveProfile !!} @endif>
                <a href="{!! url('/profile') !!}" title="Profile">My Profile</a>
                <div class="uk-padding-small" uk-drop>
                    <ul class="uk-nav uk-navbar-dropdown-nav">
                        <li><a href="{!! url('/profile') !!}"><span class="uk-margin-small-right" uk-icon="icon: user"></span> My Profile</a></li>
                        <li><a href="{!! url('/logout') !!}"><span class="uk-margin-small-right" uk-icon="icon: sign-out"></span> Logout</a></li>
                    </ul>
                </div>
            </li> --}}
            {{-- @endif --}}
            <li class="uk-nav-divider"></li>
            <li><a target="_blank" href="https://www.instagram.com/tiniwinibiti.id/"><span uk-icon="icon: instagram"></span> Instagram</a></li>
            <li><a target="_blank" href="https://www.facebook.com/tiniwinibiti.id/"><span uk-icon="icon: facebook"></span> Facebook</a></li>
            <li><a target="_blank" href=""><span uk-icon="icon: twitter"></span> Twitter</a></li>
        </ul>
    </div>
</div>
