@extends('frontend.layouts.default')

@section('page-level-styles')
@endsection

@section('page-level-nav')
@endsection

@section('content')
    <section id="home1" class="twb-home-section">
        <div class="uk-background-cover uk-height-viewport uk-width-1-1 uk-flex uk-flex-center uk-flex-middle" style="background-image: url({!! asset('assets/img/bg-home-section-1.jpg') !!});">
            <div class="uk-width-1-3 uk-text-center">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</div>
        </div>
    </section>
    <section id="home2" class="twb-home-section">
        2
    </section>
    <section id="home3" class="twb-home-section">
        3
    </section>
    <section id="home4" class="twb-home-section">
        4
    </section>
@endsection

@section('page-level-scripts')
    <script>
        $(document).ready(function() {
        });
    </script>
@endsection
