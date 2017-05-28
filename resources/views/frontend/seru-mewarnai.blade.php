@extends('frontend.layouts.default')

@section('page-level-styles')
@endsection

@section('page-level-nav')
@endsection

@section('content')
    <section class="twb-content">
        <div class="uk-container uk-container-small">
            @include('frontend.includes.coloring-template')

            <h4 class="uk-text-uppercase">Langkah KEDUA: MEMAJANG Lembar Mewarnai</h4>
            <div class="uk-flex uk-flex-middle" uk-grid>
                <div class="uk-width-expand">Memindai dan mengunggah hasil mewarnai kamu untuk dipajangkan di halaman situs ini, serta mengisi nama, usia, tempat tinggal, alamat e-mail kamu.</div>
                <div class="uk-width-auto">
                    @if (auth()->check())
                        <a class="uk-button uk-button-small uk-button-primary green uk-width-small twb-round upload"><span uk-icon="icon: cloud-upload"></span> UPLOAD</a>
                    @else
                        <a class="uk-button uk-button-small uk-button-primary green uk-width-small twb-round login"><span uk-icon="icon: cloud-upload"></span> UPLOAD</a>
                    @endif
                </div>
            </div>


            <h2 class="twb-blue-text">GALERI WARNA</h2>
            <div class="uk-flex uk-flex-middle uk-flex-between uk-child-width-1-3 uk-grid-small" uk-grid>
                <div>
                    <div class="twb-color">
                        <a class="uk-cover-container thumb">
                            <img src="{!! asset('images/sample-content/colored-1.jpg') !!}" alt="Tini Wini Biti" uk-cover>
                        </a>
                        <div class="info uk-margin-small-top">
                            <h6 class="uk-margin-remove uk-text-uppercase">Lorem ipsum dolor sit amet</h6>
                            <div class="person"><strong>Nama Anak</strong>, 5 Tahun, Jakarta</div>
                        </div>
                    </div>
                </div>
                <div>
                    <div class="twb-color">
                        <a class="uk-cover-container thumb">
                            <img src="{!! asset('images/sample-content/colored-2.jpg') !!}" alt="Tini Wini Biti" uk-cover>
                        </a>
                        <div class="info uk-margin-small-top">
                            <h6 class="uk-margin-remove uk-text-uppercase">Lorem ipsum dolor sit amet</h6>
                            <div class="person"><strong>Nama Anak</strong>, 5 Tahun, Jakarta</div>
                        </div>
                    </div>
                </div>
                <div>
                    <div class="twb-color">
                        <a class="uk-cover-container thumb">
                            <img src="{!! asset('images/sample-content/colored-3.jpg') !!}" alt="Tini Wini Biti" uk-cover>
                        </a>
                        <div class="info uk-margin-small-top">
                            <h6 class="uk-margin-remove uk-text-uppercase">Lorem ipsum dolor sit amet</h6>
                            <div class="person"><strong>Nama Anak</strong>, 5 Tahun, Jakarta</div>
                        </div>
                    </div>
                </div>
                <div>
                    <div class="twb-color">
                        <a class="uk-cover-container thumb">
                            <img src="{!! asset('images/sample-content/colored-4.jpg') !!}" alt="Tini Wini Biti" uk-cover>
                        </a>
                        <div class="info uk-margin-small-top">
                            <h6 class="uk-margin-remove uk-text-uppercase">Lorem ipsum dolor sit amet</h6>
                            <div class="person"><strong>Nama Anak</strong>, 5 Tahun, Jakarta</div>
                        </div>
                    </div>
                </div>
                <div>
                    <div class="twb-color">
                        <a class="uk-cover-container thumb">
                            <img src="{!! asset('images/sample-content/colored-5.jpg') !!}" alt="Tini Wini Biti" uk-cover>
                        </a>
                        <div class="info uk-margin-small-top">
                            <h6 class="uk-margin-remove uk-text-uppercase">Lorem ipsum dolor sit amet</h6>
                            <div class="person"><strong>Nama Anak</strong>, 5 Tahun, Jakarta</div>
                        </div>
                    </div>
                </div>
                <div>
                    <div class="twb-color">
                        <a class="uk-cover-container thumb">
                            <img src="{!! asset('images/sample-content/colored-6.jpg') !!}" alt="Tini Wini Biti" uk-cover>
                        </a>
                        <div class="info uk-margin-small-top">
                            <h6 class="uk-margin-remove uk-text-uppercase">Lorem ipsum dolor sit amet</h6>
                            <div class="person"><strong>Nama Anak</strong>, 5 Tahun, Jakarta</div>
                        </div>
                    </div>
                </div>
                <div>
                    <div class="twb-color">
                        <a class="uk-cover-container thumb">
                            <img src="{!! asset('images/sample-content/colored-7.jpg') !!}" alt="Tini Wini Biti" uk-cover>
                        </a>
                        <div class="info uk-margin-small-top">
                            <h6 class="uk-margin-remove uk-text-uppercase">Lorem ipsum dolor sit amet</h6>
                            <div class="person"><strong>Nama Anak</strong>, 5 Tahun, Jakarta</div>
                        </div>
                    </div>
                </div>
                <div>
                    <div class="twb-color">
                        <a class="uk-cover-container thumb">
                            <img src="{!! asset('images/sample-content/colored-8.jpg') !!}" alt="Tini Wini Biti" uk-cover>
                        </a>
                        <div class="info uk-margin-small-top">
                            <h6 class="uk-margin-remove uk-text-uppercase">Lorem ipsum dolor sit amet</h6>
                            <div class="person"><strong>Nama Anak</strong>, 5 Tahun, Jakarta</div>
                        </div>
                    </div>
                </div>
                <div>
                    <div class="twb-color">
                        <a class="uk-cover-container thumb">
                            <img src="{!! asset('images/sample-content/colored-9.jpg') !!}" alt="Tini Wini Biti" uk-cover>
                        </a>
                        <div class="info uk-margin-small-top">
                            <h6 class="uk-margin-remove uk-text-uppercase">Lorem ipsum dolor sit amet</h6>
                            <div class="person"><strong>Nama Anak</strong>, 5 Tahun, Jakarta</div>
                        </div>
                    </div>
                </div>
            </div>
            <ul class="uk-pagination twb-pagination" uk-margin>
                <li><a href="#"><span uk-pagination-previous></span></a></li>
                <li><a href="#">1</a></li>
                <li><a href="#">4</a></li>
                <li><a href="#">5</a></li>
                <li><a href="#">6</a></li>
                <li class="uk-active"><span>7</span></li>
                <li><a href="#">8</a></li>
                <li><a href="#">9</a></li>
                <li><a href="#">10</a></li>
                <li><a href="#">20</a></li>
                <li><a href="#"><span uk-pagination-next></span></a></li>
            </ul>
        </div>

        @include('frontend.includes.upload-modal');

    </section>
@endsection

@section('page-level-scripts')
    <script>
        var isLoggedIn = @if(auth()->check()) 'true'; @else 'false'; @endif
    </script>
    <script src="{!! asset('assets/js/jquery.form.min.js') !!}"></script>
    <script src="{!! asset('assets/js/coloring-template.js') !!}"></script>
    <script src="{!! asset('assets/js/seru-mewarnai.js') !!}"></script>
    <script>
        loadTemplate('template-paginated');
    </script>
@endsection
