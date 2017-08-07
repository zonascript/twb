@extends('duniamain.layout')

@section('page-level-styles')

@endsection

@section('page-level-nav')
@endsection

@section('content')
    <section id="mainhome" class="uk-background-bottom-center uk-background-contain" style="background-image: url({!! asset('images/duniamain/bg-home-all.png') !!})">
        <div class="dm-home-info">
            <h5 class="dm-blue-text">Ayo Moms, jangan sampai ketinggalan!<br>
                Ikuti kompetisi #DuniaMainTiniWiniBiti bersama Si Kecil<br>
                dan menangkan puluhan hadiah menarik!</h5>
            <a href="" class="dm-btn" title="Ikutan Sekarang"><span>Ikutan Sekarang</span></a>
        </div>
    </section>
    <section id="home" class="dm-home">
        <div class="uk-container">
            <div class="dm-box pattern uk-text-center">
                <h2 class="dm-badge">Cara Ikutan</h2>
                <img src="{!! asset('images/duniamain/icon-0.png') !!}" alt="Tini Wini Biti">
                <div class="uk-width-3-4@m uk-align-center">
                    <ol class="uk-text-left">
                        <li>Download aplikasi Dunia Main Tini Wini Biti di Google Play</li>
                        <li>Temukan dan kumpulkan koin karakter dikemasan Tini Wini Biti bertanda khusus.</li>
                        <li>Buka aplikasinya, lalu scan koin karakter Tini Wini Biti, mainkan permainannya dan raih skornya.</li>
                        <li>Buat foto kreatif Moms bersama si kecil dengan karakter Dunia Main Tini Wini Biti dan skor yang didapat.</li>
                        <li>Share atau upload foto tersebut di <a href="" title="duniamaintiniwinibiti.com" class="dm-red-text">duniamaintiniwinibiti.com</a></li>
                    </ol>
                </div>

                <p>Ayo tonton video ini untuk mengetahui cara bermain Aplikasi Dunia Main Tini Wini Biti dengan koin Tini Wini Biti. </p>
                <div class="uk-width-3-4@m uk-align-center">
                    <div class="dm-videowrap"><iframe width="560" height="315" src="https://www.youtube.com/embed/VoUjaLDXBDc" frameborder="0" allowfullscreen></iframe></div>
                </div>

                <h2 class="dm-badge">Gallery</h2>
                <p>Ayo cek kelengkapan koleksi ke-15 koin Tini Wini Biti dengan klik pada ikon di bawah ini<br>
                    sesuai dengan nama Moms yang terdaftar untuk melihat album foto Si Kecil dan Moms!</p>

                <div class="dm-seacrh uk-inline uk-width-1-2@m uk-align-center">
                    <button class="uk-button uk-form-icon uk-form-small uk-form-icon-flip uk-width-auto dm-red dm-round" type="submit" name="button">Cari</button>
                    <input class="uk-input uk-width-1-1 uk-form-small dm-round" type="text" name="" value="" placeholder="Cari nama kamu di sini...">
                </div>

                <ul class="uk-child-width-1-4 uk-flex uk-flex-center uk-margin-large-top gallery-container" uk-grid>

                </ul>
                {{-- <ul class="uk-pagination twb-pagination gallery-nav-container" uk-margin></ul> --}}

                <ul class="uk-pagination uk-flex-center dm-pagination" uk-margin>
                    <li><a href="#" title="Previous"><span uk-pagination-previous></span></a></li>
                    <li><a href="#" title="Page 1">1</a></li>
                    <li><a href="#" title="Page 2">2</a></li>
                    <li class="uk-active"><span>3</span></li>
                    <li><a href="#" title="Next"><span uk-pagination-next></span></a></li>
                </ul>
                <p>Pastikan kamu membaca Syarat &amp; Ketentuannya ya, <a class="dm-red-text" href="{{ url('/dunia-main/term') }}" title="baca disini">baca disini</a>.</p>
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
