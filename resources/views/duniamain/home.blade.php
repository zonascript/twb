@extends('duniamain.layout')

@section('page-level-styles')

@endsection

@section('page-level-nav')
@endsection

@section('content')
    <section id="mainhome" class="uk-background-bottom-center uk-background-contain" style="background-image: url({!! asset('images/duniamain/bg-home-all.png') !!})">
        <div class="dm-home-info">
            <h4 class="dm-blue-text uk-margin-remove">Ayo dapatkan PSVita, Action Cam &amp;<br>puluhan hadiah menarik lainnya!</h4>
            <h5 class="dm-blue-text uk-margin-remove-top">tiniwinibiti.id/duniamain</h5>
            <a href="" class="dm-btn" title="Ikutan Sekarang"><span>Ikutan Sekarang</span></a>
        </div>
    </section>
    <section id="home" class="dm-home">
        <div class="uk-container">
            <div class="dm-box pattern uk-text-center">
                <h2 class="dm-badge">Cara Ikutan</h2>
                <p>Ayo tonton video ini untuk mengetahui selengkapnya<br>
                    cara bermain dengan koin Tini Wini Biti!</p>
                <div class="uk-width-3-4@m uk-align-center">
                    <div class="dm-videowrap"><iframe width="560" height="315" src="https://www.youtube.com/embed/VoUjaLDXBDc" frameborder="0" allowfullscreen></iframe></div>
                </div>

                <h2 class="dm-badge">Gallery</h2>
                <p>Ayo cek sudah lengkapkah koleksimu disini!<br>
                    Klik karakter dengan wajahmu untuk melihat album fotomu!</p>

                <ul class="uk-child-width-1-4 uk-flex uk-flex-center uk-margin-large-top gallery-container" uk-grid>

                </ul>
                <ul class="uk-pagination twb-pagination gallery-nav-container" uk-margin></ul>

                <ul class="uk-pagination uk-flex-center dm-pagination" uk-margin>
                    <li><a href="#" title="Previous"><span uk-pagination-previous></span></a></li>
                    <li><a href="#" title="Page 1">1</a></li>
                    <li><a href="#" title="Page 6">2</a></li>
                    <li class="uk-active"><span>3</span></li>
                    <li><a href="#" title="Next"><span uk-pagination-next></span></a></li>
                </ul>

                <img src="{!! asset('images/duniamain/icon-1.png') !!}" alt="Tini Wini Biti" class="dm-icon dm-icon-1">
                <img src="{!! asset('images/duniamain/icon-2.png') !!}" alt="Tini Wini Biti" class="dm-icon dm-icon-2">
                <img src="{!! asset('images/duniamain/icon-3.png') !!}" alt="Tini Wini Biti" class="dm-icon dm-icon-3">
                <img src="{!! asset('images/duniamain/icon-4.png') !!}" alt="Tini Wini Biti" class="dm-icon dm-icon-4">
            </div>
        </div>
    </section>
@endsection

@section('page-level-scripts')
    <script src="{!! asset('assets/js/moment.min.js') !!}"></script>
    <script src="{!! asset('assets/js/coins.js') !!}"></script>
    <script>
        $(document).ready(function() {
            var h = (54 / 96) * $('#mainhome').width();
            $('#mainhome').height(h)
            loadGallery('coins-paginated', 'coins-paginated');
        });
    </script>
@endsection
