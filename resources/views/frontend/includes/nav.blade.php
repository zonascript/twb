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
    </ul>
    <ul class="twb-socmed uk-visible@s">
        <li><a href="" class="uk-icon-button" uk-icon="icon: instagram"></a></li>
        <li><a href="" class="uk-icon-button" uk-icon="icon: facebook"></a></li>
        <li><a href="" class="uk-icon-button" uk-icon="icon: twitter"></a></li>
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
            <li class="uk-nav-divider"></li>
            <li><a href=""><span uk-icon="icon: instagram"></span> Instagram</a></li>
            <li><a href=""><span uk-icon="icon: facebook"></span> Facebook</a></li>
            <li><a href=""><span uk-icon="icon: twitter"></span> Twitter</a></li>
        </ul>
    </div>
</div>
