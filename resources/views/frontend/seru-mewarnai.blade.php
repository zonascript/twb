@extends('frontend.layouts.default')

@section('page-level-styles')
@endsection

@section('page-level-nav')
@endsection

@section('content')
    <section class="twb-content">
        <div class="uk-container uk-container-small">
            <h2 class="twb-blue-text">SERU MEWARNAI</h2>
            <h4 class="uk-text-uppercase">Langkah Pertama: Memilih Lembar Mewarnai</h4>
            <p>Pilih dan cetak salah satu lembar gambar untuk diwarnai. Mewarnai secara kreatif dan bebas pada lembar yang terpilih dan akan dipamerkan kepada masyarakat!</p>

            <div class="uk-flex uk-flex-middle uk-flex-between uk-child-width-1-4 uk-grid-small" uk-grid>
                <div>
                    <div class="twb-color-bw">
                        <div class="uk-cover-container thumb">
                            <img src="{!! asset('images/sample-content/color-1.jpg') !!}" alt="Tini Wini Biti" uk-cover>
                        </div>
                        <div class="info uk-padding-small">
                            <h6 class="twb-blue-text uk-margin-remove">Taman Favorit Kupu-kupu</h6>
                            <ul class="uk-subnav uk-subnav-divider uk-margin-remove">
                                <li><a class="uk-text-capitalize zoom" title="Zoom">Zoom +</a></li>
                                <li><a href="" class="uk-text-capitalize" title="">Print</a></li>
                                <li><a href="" class="uk-text-capitalize" title="">Download</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div>
                    <div class="twb-color-bw">
                        <div class="uk-cover-container thumb">
                            <img src="{!! asset('images/sample-content/color-2.jpg') !!}" alt="Tini Wini Biti" uk-cover>
                        </div>
                        <div class="info uk-padding-small">
                            <h6 class="twb-blue-text uk-margin-remove">Sahabat Main Bebek</h6>
                            <ul class="uk-subnav uk-subnav-divider uk-margin-remove">
                                <li><a class="uk-text-capitalize zoom" title="">Zoom +</a></li>
                                <li><a href="" class="uk-text-capitalize" title="">Print</a></li>
                                <li><a href="" class="uk-text-capitalize" title="">Download</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div>
                    <div class="twb-color-bw">
                        <div class="uk-cover-container thumb">
                            <img src="{!! asset('images/sample-content/color-3.jpg') !!}" alt="Tini Wini Biti" uk-cover>
                        </div>
                        <div class="info uk-padding-small">
                            <h6 class="twb-blue-text uk-margin-remove">Petualangan yang Seru</h6>
                            <ul class="uk-subnav uk-subnav-divider uk-margin-remove">
                                <li><a class="uk-text-capitalize zoom" title="">Zoom +</a></li>
                                <li><a href="" class="uk-text-capitalize" title="">Print</a></li>
                                <li><a href="" class="uk-text-capitalize" title="">Download</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div>
                    <div class="twb-color-bw">
                        <div class="uk-cover-container thumb">
                            <img src="{!! asset('images/sample-content/color-4.jpg') !!}" alt="Tini Wini Biti" uk-cover>
                        </div>
                        <div class="info uk-padding-small">
                            <h6 class="twb-blue-text uk-margin-remove">4 Sehat 5 Sempurna</h6>
                            <ul class="uk-subnav uk-subnav-divider uk-margin-remove">
                                <li><a class="uk-text-capitalize zoom" title="">Zoom +</a></li>
                                <li><a href="" class="uk-text-capitalize" title="">Print</a></li>
                                <li><a href="" class="uk-text-capitalize" title="">Download</a></li>
                            </ul>
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

            <h4 class="uk-text-uppercase">Langkah KEDUA: MEMAJANG Lembar Mewarnai</h4>
            <div class="uk-flex uk-flex-middle" uk-grid>
                <div class="uk-width-expand">Memindai dan mengunggah hasil mewarnai kamu untuk dipajangkan di halaman situs ini, serta mengisi nama, usia, tempat tinggal, alamat e-mail kamu.</div>
                <div class="uk-width-auto">
                    <a href="" class="uk-button uk-button-small uk-button-primary green uk-width-small"><span uk-icon="icon: cloud-upload"></span> UPLOAD</a>
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
    </section>
@endsection

@section('page-level-scripts')
    <script>
        $(document).ready(function() {
            $('a.zoom').on('click', function(e) {
                e.preventDefault();
                $(this).blur();
                var img = $(this).closest('div.twb-color-bw').find('img').prop('src');
                var txt = $(this).closest('div.info').find('h6').text();
                var modal = '<button class="uk-modal-close-outside" type="button" uk-close></button>' +
                '<img src="'+img+'">' +
                '<div class="uk-padding-small uk-flex uk-flex-middle uk-flex-between">' +
                    '<div>'+ txt +'</div>' +
                    '<ul class="uk-subnav uk-subnav-divider uk-margin-remove">' +
                        '<li><a href="" class="uk-text-capitalize" title="Print"><i class="fa fa-print"></i> Print</a></li>' +
                        '<li><a href="'+img+'" class="uk-text-capitalize" title="Download" target="_blank"><i class="fa fa-download"></i> Download</a></li>' +
                    '</ul>' +
                '</div>';
                var uikitModal = UIkit.modal.dialog(modal);
            });

            $('a.thumb').on('click', function(e) {
                e.preventDefault();
                $(this).blur();
                var img = $(this).find('img').prop('src');
                var txt = $(this).closest('div.twb-color').find('h6').text();
                var person = $(this).closest('div.twb-color').find('.person').text();
                var modal = '<button class="uk-modal-close-outside" type="button" uk-close></button>' +
                '<img src="'+img+'">' +
                '<div class="uk-padding-small">' +
                    '<h6 class="uk-margin-remove">'+ txt +'</h6>' +
                    '<div class="uk-flex uk-flex-middle uk-flex-between">' +
                        '<div>'+ person +'</div>' +
                        '<ul class="uk-subnav uk-subnav-divider uk-margin-remove">' +
                            '<li><a href="" class="uk-text-capitalize" title="Print"><i class="fa fa-print"></i> Print</a></li>' +
                            '<li><a href="'+img+'" class="uk-text-capitalize" title="Download" target="_blank"><i class="fa fa-download"></i> Download</a></li>' +
                        '</ul>' +
                    '</div>'
                '</div>';
                var uikitModal = UIkit.modal.dialog(modal);
            });
        });
    </script>
@endsection
