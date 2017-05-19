<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>@if(isset($pageTitle)) {!! $pageTitle !!} -  @endif Tini Wini Biti</title>

        <link href="{!! asset('assets/img/favicon.png') !!}" rel="shortcut icon">

        <link rel="stylesheet" href="{!! asset('assets/css/uikit.css') !!}" />
        <link rel="stylesheet" href="{!! asset('assets/css/frontend.css') !!}" />
		@section('page-level-styles')
	    @show
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
    <body @if(isset($pageClass)) {!! $pageClass !!} @endif>
        <a href="{{ url('/') }}" title="Tini Wini Biti" class="twb-logo">
            <img src="{!! asset('assets/img/logo.svg') !!}" alt="Tini Wini Biti">
        </a>
        @include('frontend.includes.nav')
