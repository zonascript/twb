@extends('duniamain.layout')

@section('page-level-styles')

@endsection

@section('page-level-nav')
@endsection

@section('content')
    <section id="mainhome" class="uk-background-bottom-center uk-background-contain" style="background-image: url({!! asset('images/duniamain/bg-home.png') !!})">
        <div class="dm-home-info">
            <h5 class="dm-blue-text">Ayo Moms, jangan sampai ketinggalan!<br>
                Ikuti kompetisi #DuniaMainTiniWiniBiti bersama Si Kecil<br>
                dan menangkan puluhan hadiah menarik!</h5>
            @if(auth()->check())
                <a href="{!! url('dunia-main/album/' . auth()->id()) !!}" class="dm-btn" title="Ikutan Sekarang"><span>Ikutan Sekarang</span></a>
            @else
                <a href="{{ url('redirect') }}" class="dm-btn" title="Ikutan Sekarang"><span>Ikutan Sekarang</span></a>
            @endif
        </div>
    </section>
    <section id="home" class="dm-home">
        <div class="uk-container">
            <div class="dm-box pattern uk-text-center">
                <h2 class="dm-badge uk-margin-large-top uk-position-relative">
                    Cara Ikutan
                    <img src="{!! asset('images/duniamain/icon-1.png') !!}" alt="Tini Wini Biti" class="dm-icon dm-icon-1">
                </h2>
                <div class="uk-width-1-1 uk-margin uk-padding uk-inline uk-text-center dm-overlay">
                    <div class="uk-flex uk-flex-center uk-grid-small uk-child-width-1-3@m" uk-grid>
                        <div>
                            <h5 class="uk-margin-small-bottom white-text">Step 1</h5>
                            <img src="{!! asset('images/duniamain/step-1.png') !!}" alt="Tini Wini Biti">
                            <p>Download aplikasi Dunia Main<br>Tini Wini Biti di Google Play Store.</p>
                        </div>
                        <div>
                            <h5 class="uk-margin-small-bottom white-text">Step 2</h5>
                            <img src="{!! asset('images/duniamain/step-2.png') !!}" alt="Tini Wini Biti">
                            <p>Temukan dan kumpulkan koin<br>karakter dikemasan Tini Wini Biti<br>bertanda khusus.</p>
                        </div>
                        <div>
                            <h5 class="uk-margin-small-bottom white-text">Step 3</h5>
                            <img src="{!! asset('images/duniamain/step-3.png') !!}" alt="Tini Wini Biti">
                            <p>Scan koin karakter Tini Wini Biti</p>
                        </div>
                        <div>
                            <h5 class="uk-margin-small-bottom white-text">Step 4</h5>
                            <img src="{!! asset('images/duniamain/step-4.png') !!}" alt="Tini Wini Biti">
                            <p>Mainkan permainannya dan<br>raih skor tertinggi</p>
                        </div>
                        <div>
                            <h5 class="uk-margin-small-bottom white-text">Step 5</h5>
                            <img src="{!! asset('images/duniamain/step-5.png') !!}" alt="Tini Wini Biti">
                            <p>Buat foto kreatif Moms bersama si kecil<br>dengan karakter Dunia Main Tini Wini Biti<br>dan skor yang didapat.</p>
                        </div>
                        <div>
                            <h5 class="uk-margin-small-bottom white-text">Step 6</h5>
                            <img src="{!! asset('images/duniamain/step-6.png') !!}" alt="Tini Wini Biti">
                            <p>Upload dan penuhi album foto<br>sesuai dengan karakter dan skor<br>di <a href="" class="uk-link yellow-text" title="tiniwinibiti.com/duniamain">tiniwinibiti.com/duniamain</a>.</p>
                        </div>
                    </div>
                </div>

                <p>Ayo tonton video ini untuk mengetahui cara bermain<br>Aplikasi Dunia Main Tini Wini Biti dengan koin Tini Wini Biti. </p>
                <div class="uk-width-1-2@m uk-align-center uk-position-relative">
                    <div class="dm-videowrap"><iframe width="560" height="315" src="https://www.youtube.com/embed/VoUjaLDXBDc" frameborder="0" allowfullscreen></iframe></div>
                    <img src="{!! asset('images/duniamain/icon-2.png') !!}" alt="Tini Wini Biti" class="dm-icon dm-icon-2">
                    <img src="{!! asset('images/duniamain/icon-3.png') !!}" alt="Tini Wini Biti" class="dm-icon dm-icon-3">
                </div>

                <h2 class="dm-badge">Gallery</h2>
                <p>Ayo cek kelengkapan koleksi ke-15 koin Tini Wini Biti<br>dengan klik pada ikon di bawah ini sesuai dengan nama Moms<br>yang terdaftar untuk melihat album foto Si Kecil dan Moms!</p>

                <div class="dm-search uk-inline uk-width-1-2@m uk-align-center uk-position-relative">
                    <button class="uk-button uk-form-icon uk-form-small uk-form-icon-flip uk-width-auto dm-red dm-round searchbutton" type="submit" name="button">Cari</button>
                    <input class="uk-input uk-width-1-1 uk-form-small dm-round searchtext" type="text" name="searchtext" value="" placeholder="Cari nama kamu di sini...">
                    <img src="{!! asset('images/duniamain/icon-4.png') !!}" alt="Tini Wini Biti" class="dm-icon dm-icon-4">
                </div>

                <div class="uk-width-1-1 uk-margin uk-padding uk-inline uk-text-center dm-overlay">
                    <ul class="uk-child-width-1-2 uk-child-width-1-4@m uk-flex uk-flex-center uk-margin-large-top gallery-container" uk-grid></ul>
                    <ul class="uk-pagination uk-flex-center dm-pagination gallery-nav-container" uk-margin>
                        {{--<li><a href="#" title="Previous"><span uk-pagination-previous></span></a></li>--}}
                        {{--<li><a href="#" title="Page 1">1</a></li>--}}
                        {{--<li><a href="#" title="Page 2">2</a></li>--}}
                        {{--<li class="uk-active"><span>3</span></li>--}}
                        {{--<li><a href="#" title="Next"><span uk-pagination-next></span></a></li>--}}
                    </ul>
                </div>

                <p>Pastikan kamu membaca Syarat &amp; Ketentuannya ya, <a class="dm-red-text" href="{{ url('/dunia-main/term') }}" title="baca disini">baca disini</a>.</p>
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
            $('#mainhome').height(h);
            loadGallery('coins-paginated', 'coins-paginated', '');

            $('.searchtext').on('keypress', function(e) {
                if(e.which == 13) {
                    $searchText = $('.searchtext').val();
                    loadGallery('coins-paginated', 'coins-paginated', $searchText);
                }
            });

            $('.searchbutton').on('click', function() {
                $searchText = $('.searchtext').val();
                if ($searchText != '') {
                    loadGallery('coins-paginated', 'coins-paginated', $searchText);
                }
            });
        });
    </script>
@endsection
