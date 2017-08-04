@extends('duniamain.layout')

@section('page-level-styles')

@endsection

@section('page-level-nav')
@endsection

@section('content')
    <section id="mainhome" class="uk-background-top-center" style="background-image: url({!! asset('images/duniamain/bg-home.png') !!})">
    </section>
    <section id="home" class="dm-home">
        <div class="uk-container">
            <div class="dm-box pattern uk-text-center">
                <img src="{!! asset('images/duniamain/icon-1.png') !!}" alt="Tini Wini Biti" class="dm-icon dm-icon-1">
                <img src="{!! asset('images/duniamain/icon-2.png') !!}" alt="Tini Wini Biti" class="dm-icon dm-icon-2">
                <img src="{!! asset('images/duniamain/icon-3.png') !!}" alt="Tini Wini Biti" class="dm-icon dm-icon-3">
                <img src="{!! asset('images/duniamain/icon-4.png') !!}" alt="Tini Wini Biti" class="dm-icon dm-icon-4">
                <h2 class="dm-badge">Cara Ikutan</h2>
                <p>Ayo tonton video ini untuk mengetahui selengkapnya<br>
                    cara bermain dengan koin Tini Wini Biti!</p>
                <div class="dm-videowrap"><iframe width="560" height="315" src="https://www.youtube.com/embed/VoUjaLDXBDc" frameborder="0" allowfullscreen></iframe></div>

                <h2 class="dm-badge">Gallery</h2>
                <p>Ayo cek sudah lengkapkah koleksimu disini!<br>
                    Klik karakter dengan wajahmu untuk melihat album fotomu!</p>

                <ul class="uk-child-width-1-4 uk-flex uk-flex-center uk-margin-large-top gallery-container" uk-grid>

                </ul>
                <ul class="uk-pagination twb-pagination gallery-nav-container" uk-margin></ul>
            </div>
        </div>
    </section>
@endsection

@section('page-level-scripts')
    <script src="{!! asset('assets/js/moment.min.js') !!}"></script>
    <script src="{!! asset('assets/js/coins.js') !!}"></script>
    <script>
        $(document).ready(function() {
            loadGallery('coins-paginated', 'coins-paginated');
        });
    </script>
@endsection
