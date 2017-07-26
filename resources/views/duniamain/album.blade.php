@extends('duniamain.layout')

@section('page-level-styles')

@endsection

@section('page-level-nav')
@endsection

@section('content')
    <section class="dm-main">
        <div class="uk-container">
            <div class="dm-box uk-text-center uk-margin-large-bottom">
                <img src="{!! asset('images/duniamain/icon-2.png') !!}" alt="Tini Wini Biti" class="dm-icon dm-icon-2" style="top:180px;right:-20px;">
                <img src="{!! asset('images/duniamain/icon-3.png') !!}" alt="Tini Wini Biti" class="dm-icon dm-icon-3" style="top: 250px;">

                <div class="uk-flex uk-flex-middle" uk-grid>
                    <div class="uk-width-auto dm-user">
                        <div class="dm-img-user">
                            <img class="uk-border-circle" src="https://s-media-cache-ak0.pinimg.com/736x/56/63/ba/5663ba440ee28f9bb5735972f1ef61fc--watermelon-baby-water-melon.jpg" width="175" height="175" alt="Zaky0078">
                        </div>
                    </div>
                    <div class="uk-width-expand uk-text-left">
                        <h5 class="white-text">Username</h5>

                        <div class="uk-grid-collapse" uk-grid>
                            <div class="uk-width-1-4">Nama Anak :</div>
                            <div class="uk-width-3-4">John Doe Jr.</div>
                            <div class="uk-width-1-4 uk-margin-small-bottom">Nama Ibu :</div>
                            <div class="uk-width-3-4 uk-margin-small-bottom">Mrs. Jane Doe</div>
                            <div class="uk-width-1-4">Umur :</div>
                            <div class="uk-width-3-4">27</div>
                            <div class="uk-width-1-4">Kelas :</div>
                            <div class="uk-width-3-4">6 SD</div>
                            <div class="uk-width-1-4 uk-margin-small-bottom">Sekolah :</div>
                            <div class="uk-width-3-4 uk-margin-small-bottom">SD Bina Cendekia</div>
                            <div class="uk-width-1-4">Alamat :</div>
                            <div class="uk-width-3-4">Jl. Haji Thaif</div>
                        </div>
                    </div>
                </div>

            </div>
            <h2 class="dm-badge">Album Foto</h2>
            <div class="uk-margin uk-text-center white-text">
                Koin Dunia Main TWB yang sudah kamu kumpulkan :
                <h3 class="uk-margin-remove white-text">3/15 koin</h3>
            </div>
            <ul class="uk-child-width-1-5 uk-flex uk-flex-center" uk-grid>
                <li>
                    <div class="dm-album uk-text-center ">
                        <div class="">1. Bebek</div>
                        <div class="dm-album-img">
                            <div class="uk-background-cover" style="background-image:url(https://i.cbc.ca/1.1476199.1379028180!/httpImage/image.jpg_gen/derivatives/16x9_620/hi-good-mother-852-8col.jpg)">
                                <img src="{!! asset('images/duniamain/overlay.png') !!}" alt="Bebek">
                                <div class="dm-poin">42532</div>
                            </div>
                        </div>
                        <button class="uk-button uk-button-small dm-upload" disabled><span>Upload</span></button>
                    </div>
                </li>
                <li>
                    <div class="dm-album uk-text-center ">
                        <div class="">2. Ayam</div>
                        <div class="dm-album-img">
                            <div class="uk-background-cover" style="background-image:url(https://i.cbc.ca/1.1476199.1379028180!/httpImage/image.jpg_gen/derivatives/16x9_620/hi-good-mother-852-8col.jpg)">
                                <img src="{!! asset('images/duniamain/overlay.png') !!}" alt="Ayam">
                                <div class="dm-poin">42532</div>
                            </div>
                        </div>
                        <button class="uk-button uk-button-small dm-upload" disabled><span>Upload</span></button>
                    </div>
                </li>
                <li>
                    <div class="dm-album uk-text-center ">
                        <div class="">3. Gajah</div>
                        <div class="dm-album-img">
                            <div class="uk-background-cover" style="background-image:url(https://i.cbc.ca/1.1476199.1379028180!/httpImage/image.jpg_gen/derivatives/16x9_620/hi-good-mother-852-8col.jpg)">
                                <img src="{!! asset('images/duniamain/overlay.png') !!}" alt="Gajah">
                                <div class="dm-poin">42532</div>
                            </div>
                        </div>
                        <button class="uk-button uk-button-small dm-upload" disabled><span>Upload</span></button>
                    </div>
                </li>
                <li>
                    <div class="dm-album uk-text-center ">
                        <div class="">4. Kupu-kupu</div>
                        <div class="dm-album-img">
                            <div class="uk-background-cover">
                                ?
                            </div>
                        </div>
                        <button class="uk-button uk-button-small dm-upload"><span>Upload</span></button>
                    </div>
                </li>
                <li>
                    <div class="dm-album uk-text-center ">
                        <div class="">5. Kura-kura</div>
                        <div class="dm-album-img">
                            <div class="uk-background-cover">
                                ?
                            </div>
                        </div>
                        <button class="uk-button uk-button-small dm-upload"><span>Upload</span></button>
                    </div>
                </li>
            </ul>
        </div>
    </section>
@endsection

@section('page-level-scripts')
    <script>
        $(document).ready(function() {

        });
    </script>
@endsection
