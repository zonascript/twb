<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Page Not Found! - Tini Wini Biti</title>

        <link href="{!! asset('assets/img/favicon.png') !!}" rel="shortcut icon">

        <link rel="stylesheet" href="{!! asset('assets/css/uikit.css') !!}" />
        <link rel="stylesheet" href="{!! asset('assets/css/frontend.css') !!}" />

        <script src="{!! asset('assets/js/jquery.min.js') !!}"></script>
        <script src="{!! asset('assets/js/uikit.js') !!}"></script>
        <script src="{!! asset('assets/js/uikit-icons.js') !!}"></script>
        <!-- HTML5 Shiv and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
            <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>
    <body class="home">
        <a href="{{ url('/') }}" title="Tini Wini Biti" class="twb-logo">
            <img src="{!! asset('assets/img/logo.svg') !!}" alt="Tini Wini Biti">
        </a>
        @include('frontend.includes.nav')

        <section class="twb-content uk-background-cover uk-background-top-center uk-flex uk-flex-middle uk-flex-center" style="background-image: url({!! asset('assets/img/bg-home.png') !!});">
            <div class="uk-text-center" style="margin-top:-104px">
                <h1 class="uk-margin-remove white-text">404</h1>
                <h3 class="uk-margin-remove white-text">Ooops! Page not found!</h3>
            </div>
        </section>

@include('frontend.includes.footer')
