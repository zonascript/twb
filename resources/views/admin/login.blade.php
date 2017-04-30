@extends('admin.layouts.login')

@section('page-level-styles')

@endsection

@section('content')
    <section class="k-login uk-width-1-1 uk-cover-container">
        <img src="{!! asset('assets/img/admin/wilhelminabrug.jpg') !!}" alt="login" uk-cover>
        <div class="uk-overlay-primary uk-position-cover"></div>
        <div class="uk-overlay uk-overlay-default uk-position-center uk-width-1-4">
            <img class="uk-border-circle uk-align-center" src="{!! asset('assets/img/admin/favicon.png') !!}" width="100" height="100" alt="Login">
            <form action="{!! url('/admin/index') !!}">
                <div class="uk-margin">
                    <div class="uk-inline uk-width-1-1">
                        <span class="uk-form-icon" uk-icon="icon: user"></span>
                        <input class="uk-input" type="text" placeholder="Username or email">
                    </div>
                </div>
                <div class="uk-margin">
                    <div class="uk-inline uk-width-1-1">
                        <span class="uk-form-icon" uk-icon="icon: lock"></span>
                        <input class="uk-input" type="password" placeholder="Password">
                    </div>
                </div>
                <div class="uk-flex uk-flex-middle uk-flex-between">
                    <label>
                        <input class="uk-checkbox" type="checkbox" id="remember">
                        <span class="uk-text-small grey-text">Remember me</span>
                    </label>
                    <button class="uk-button uk-button-secondary" type="submit">LOGIN</button>
                </div>
            </form>
        </div>
        <footer class="k-footer uk-position-bottom uk-text-center">
            Copyright &copy; <?php echo date('Y'); ?> <a class="" href="{!! url('/') !!}" target="_blank" title="Site Name">Site Name</a> | Powered by <a class="" href="http://kleur.id" target="_blank" title="Kleur CMS">Kleur CMS</a>
        </footer>
    </section>
@endsection

@section('page-level-scripts')

@endsection
