@extends('duniamain.layout')

@section('page-level-styles')

@endsection

@section('page-level-nav')
@endsection

@section('content')
    <section class="dm-main">
        <div class="uk-container">
            <div class="dm-box pattern uk-text-center uk-margin uk-padding">
                <h2 class="dm-badge">Pemenang Hadiah Utama</h2>
                <div class="uk-flex uk-flex-inline uk-flex-center uk-grid-collapse" uk-grid>
                    <div class="uk-width-1-1 uk-position-relative">
                        <img src="{!! asset('images/duniamain/hadiah-sony-samsung.png') !!}" alt="Tini Wini Biti" class="">
                        <img src="{!! asset('images/duniamain/icon-7.png') !!}" alt="Tini Wini Biti" class="dm-icon" style="top:-50px;left:-50px;">
                        <img src="{!! asset('images/duniamain/icon-2.png') !!}" alt="Tini Wini Biti" class="dm-icon" style="top:20px;right:-80px;">
                    </div>
                    <div class="uk-width-1-3">
                        <div class="">1 Unit</div>
                        <h3 class="uk-margin-remove white-text">Sony PSVita</h3>
                    </div>
                    <div class="uk-width-1-3">
                        <div class="">1 Unit</div>
                        <h3 class="uk-margin-remove white-text">Samsung Tab</h3>
                    </div>
                </div>
                <ul class="uk-child-width-1-5 uk-flex uk-flex-center uk-margin-large-bottom" uk-grid>
                    <li>
                        <div class="dm-album uk-text-center ">
                            <div class="dm-album-img">
                                <div class="uk-background-cover" style="background-image:url()">
                                </div>
                            </div>
                            <div class="">@nama</div>
                        </div>
                    </li>
                    <li>
                        <div class="dm-album uk-text-center ">
                            <div class="dm-album-img">
                                <div class="uk-background-cover" style="background-image:url()">
                                </div>
                            </div>
                            <div class="">@nama</div>
                        </div>
                    </li>
                    <li>
                        <div class="dm-album uk-text-center ">
                            <div class="dm-album-img">
                                <div class="uk-background-cover" style="background-image:url()">
                                </div>
                            </div>
                            <div class="">@nama</div>
                        </div>
                    </li>
                </ul>
                <h2 class="dm-badge uk-margin-large-top">Pemenang Hadiah Hiburan</h2>
                <div class="uk-flex uk-flex-inline uk-flex-top uk-flex-center uk-grid-small" uk-grid>
                    <div class="uk-width-1-4">
                        <img src="{!! asset('images/duniamain/hadiah-mi.png') !!}" alt="Tini Wini Biti" class="">
                    </div>
                    <div class="uk-width-1-4">
                        <img src="{!! asset('images/duniamain/hadiah-lego.png') !!}" alt="Tini Wini Biti" class="">
                    </div>
                    <div class="uk-width-1-4">
                        <img src="{!! asset('images/duniamain/hadiah-draw.png') !!}" alt="Tini Wini Biti" class="">
                    </div>
                    <div class="uk-width-1-4">
                        <img src="{!! asset('images/duniamain/hadiah-toy.png') !!}" alt="Tini Wini Biti" class="">
                    </div>

                    <div class="uk-width-1-4">
                        <div class="">3 Unit</div>
                        <h3 class="uk-margin-remove white-text">Xiaomi Smartphone</h3>
                    </div>
                    <div class="uk-width-1-4">
                        <div class="">5 Unit</div>
                        <h3 class="uk-margin-remove white-text">Lego Set</h3>
                    </div>
                    <div class="uk-width-1-4">
                        <div class="">10 Unit</div>
                        <h3 class="uk-margin-remove white-text">Drawing Supplies</h3>
                    </div>
                    <div class="uk-width-1-4">
                        <div class="">15 Unit</div>
                        <h3 class="uk-margin-remove white-text">Toy Box</h3>
                    </div>

                    <div class="uk-width-1-4">
                        @annisa_fitria <br>
                        @annisa_fitria <br>
                        @annisa_fitria
                    </div>
                    <div class="uk-width-1-4">
                        @annisa_fitria <br>
                        @annisa_fitria <br>
                        @annisa_fitria <br>
                        @annisa_fitria <br>
                        @annisa_fitria
                    </div>
                    <div class="uk-width-1-4">
                        @annisa_fitria <br>
                        @annisa_fitria <br>
                        @annisa_fitria <br>
                        @annisa_fitria <br>
                        @annisa_fitria <br>
                        @annisa_fitria <br>
                        @annisa_fitria <br>
                        @annisa_fitria <br>
                        @annisa_fitria <br>
                        @annisa_fitria
                    </div>
                    <div class="uk-width-1-4">
                        @annisa_fitria <br>
                        @annisa_fitria <br>
                        @annisa_fitria <br>
                        @annisa_fitria <br>
                        @annisa_fitria <br>
                        @annisa_fitria <br>
                        @annisa_fitria <br>
                        @annisa_fitria <br>
                        @annisa_fitria <br>
                        @annisa_fitria <br>
                        @annisa_fitria <br>
                        @annisa_fitria <br>
                        @annisa_fitria <br>
                        @annisa_fitria <br>
                        @annisa_fitria
                    </div>
                </div>
                <h2 class="dm-badge uk-margin-large-top">Pemenang Hadiah Mingguan</h2>
                <div class="uk-flex uk-flex-center uk-grid-collapse" uk-grid>
                    <div class="uk-width-1-4 uk-position-relative">
                        <img src="{!! asset('images/duniamain/icon-5.png') !!}" alt="Tini Wini Biti" class="dm-icon" style="top:0;left:0;">
                    </div>
                    <div class="uk-width-1-2">
                        <img src="{!! asset('images/duniamain/hadiah-voucher.png') !!}" alt="Tini Wini Biti" class="">
                        <h3 class="uk-margin-remove white-text">Voucher Sodexo</h3>
                        <div class="">@ Rp 250.000</div>
                    </div>
                    <div class="uk-width-1-4 uk-position-relative">
                        <img src="{!! asset('images/duniamain/icon-8.png') !!}" alt="Tini Wini Biti" class="dm-icon" style="top:0;right:0;">
                    </div>
                </div>

                <div class="uk-flex uk-flex-center uk-grid-small uk-child-width-1-4 uk-margin-large-bottom" uk-grid>
                    <div>
                        <h5 class="uk-margin-remove white-text">Periode 1</h5>
                        @annisa_fitria <br>
                        @annisa_fitria <br>
                        @annisa_fitria
                    </div>
                    <div>
                        <h5 class="uk-margin-remove white-text">Periode 2</h5>
                        @annisa_fitria <br>
                        @annisa_fitria <br>
                        @annisa_fitria
                    </div>
                    <div>
                        <h5 class="uk-margin-remove white-text">Periode 3</h5>
                        @annisa_fitria <br>
                        @annisa_fitria <br>
                        @annisa_fitria
                    </div>
                    <div>
                        <h5 class="uk-margin-remove white-text">Periode 4</h5>
                        @annisa_fitria <br>
                        @annisa_fitria <br>
                        @annisa_fitria
                    </div>
                    <div>
                        <h5 class="uk-margin-remove white-text">Periode 5</h5>
                        @annisa_fitria <br>
                        @annisa_fitria <br>
                        @annisa_fitria
                    </div>
                    <div>
                        <h5 class="uk-margin-remove white-text">Periode 6</h5>
                        @annisa_fitria <br>
                        @annisa_fitria <br>
                        @annisa_fitria
                    </div>
                    <div>
                        <h5 class="uk-margin-remove white-text">Periode 7</h5>
                        @annisa_fitria <br>
                        @annisa_fitria <br>
                        @annisa_fitria
                    </div>
                    <div>
                        <h5 class="uk-margin-remove white-text">Periode 8</h5>
                        @annisa_fitria <br>
                        @annisa_fitria <br>
                        @annisa_fitria
                    </div>
                </div>

                <p class="uk-text-center"><a href="{{ url('/dunia-main') }}" class="dm-round uk-button uk-button-danger dm-red" title="Kembali"><span>Kembali</span></a></p>
            </div>
        </div>
    </section>
@endsection

@section('page-level-scripts')
    <script>
        $(document).ready(function() {

        });
    </script>
@endsection
