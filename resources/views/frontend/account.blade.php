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
                    <li><a href="#">Upload Galeri</a></li>
                </ul>

                <ul class="uk-switcher uk-margin">
                    <li>
                        <form class="uk-form-horizontal">
                            <div class="uk-margin-small-bottom">
                                <label class="uk-form-label" for="nama">Nama</label>
                                <div class="uk-form-controls">
                                    <input class="uk-input uk-form-blank uk-form-small twb-round" id="nama" type="text" value="Nama User">
                                </div>
                            </div>
                            <div class="uk-margin-small-bottom">
                                <label class="uk-form-label" for="lahir">Tanggal Lahir</label>
                                <div class="uk-form-controls">
                                    <input class="uk-input uk-form-blank uk-form-small twb-round" id="lahir" type="text" value="01/01/2010">
                                </div>
                            </div>
                            <div class="uk-margin-small-bottom">
                                <label class="uk-form-label" for="alamat">Alamat</label>
                                <div class="uk-form-controls">
                                    <textarea class="uk-textarea uk-form-blank uk-form-small twb-round" id="alamat">Jalan Setapak No. 13</textarea>
                                </div>
                            </div>
                            <div class="uk-margin-small-bottom">
                                <label class="uk-form-label" for="kota">Kota</label>
                                <div class="uk-form-controls">
                                    <input class="uk-input uk-form-blank uk-form-small twb-round" id="kota" type="text" value="Bandung">
                                </div>
                            </div>
                            <div class="uk-margin-small-bottom">
                                <label class="uk-form-label" for="email">Email</label>
                                <div class="uk-form-controls">
                                    <input class="uk-input uk-form-blank uk-form-small twb-round" id="email" type="email" value="alamat@email.com">
                                </div>
                            </div>
                            <div class="uk-flex uk-flex-middle uk-flex-between">
                                {{-- <span class="red-text">*) Wajib diisi</span>
                                <button class="uk-button uk-button-small uk-button-primary twb-round green" title="Daftar" type="submit">DAFTAR</button> --}}
                            </div>
                        </form>
                    </li>
                    <li>
                        <div class="uk-child-width-1-3 uk-grid-small uk-margin" uk-grid>
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

                        <div class="uk-position-top-right">
                            <a href="{!! url('/seru-mewarnai') !!}" class="uk-button uk-button-small uk-button-default" title="Upload Baru">UPLOAD BARU</a>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </section>
@endsection

@section('page-level-scripts')
    <script src="{!! asset('assets/js/seru-mewarnai.js') !!}"></script>
@endsection
