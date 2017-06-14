@extends('frontend.layouts.default')

@section('page-level-styles')
@endsection

@section('page-level-nav')
@endsection

@section('content')
    <section class="twb-content">
        <div class="uk-container uk-container-small">
            <h2 class="twb-blue-text uk-text-uppercase">@if(isset($pageTitle)) {!! $pageTitle !!} @endif</h2>
            <div class="uk-position-relative">
                <ul uk-tab>
                    <li><a href="#">Profil</a></li>
                    <li><a href="#">Galeri</a></li>
                </ul>

                <ul class="uk-switcher uk-margin">
                    <li>
                        @include('frontend.includes.profile')
                    </li>
                    <li>
                        @include('frontend.includes.uploaded-images')
                    </li>
                </ul>
            </div>
        </div>
    </section>
@endsection

@section('page-level-scripts')
    <script src="{!! asset('assets/js/account.js') !!}"></script>
@endsection
