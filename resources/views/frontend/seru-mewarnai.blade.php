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
                @foreach($templates as $template)
                    <div>
                        <div class="twb-color-bw">
                            <div class="uk-cover-container thumb">
                                {{--<a class="zoom" title="zoom">--}}
                                <img src="{!! asset($template->fullpath) !!}" alt="{!! $template->title !!}" uk-cover />
                                {{--</a>--}}
                            </div>
                            <div class="info uk-padding-small">
                                <h6 class="twb-blue-text uk-margin-remove">{!! $template->title !!}</h6>
                                <ul class="uk-subnav uk-subnav-divider uk-margin-remove">
                                    <li><a class="uk-text-capitalize zoom" title="Zoom">Zoom +</a></li>
                                    <li><a href="" class="uk-text-capitalize" title="">Print</a></li>
                                    <li><a href="" class="uk-text-capitalize" title="">Download</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>

            {{ $templates->links() }}
            {{--<ul class="uk-pagination twb-pagination" uk-margin>--}}
                {{--<li><a href="#"><span uk-pagination-previous></span></a></li>--}}
                {{--<li><a href="#">1</a></li>--}}
                {{--<li><a href="#">4</a></li>--}}
                {{--<li><a href="#">5</a></li>--}}
                {{--<li><a href="#">6</a></li>--}}
                {{--<li class="uk-active"><span>7</span></li>--}}
                {{--<li><a href="#">8</a></li>--}}
                {{--<li><a href="#">9</a></li>--}}
                {{--<li><a href="#">10</a></li>--}}
                {{--<li><a href="#">20</a></li>--}}
                {{--<li><a href="#"><span uk-pagination-next></span></a></li>--}}
            {{--</ul>--}}

            <h4 class="uk-text-uppercase">Langkah KEDUA: MEMAJANG Lembar Mewarnai</h4>
            <div class="uk-flex uk-flex-middle" uk-grid>
                <div class="uk-width-expand">Memindai dan mengunggah hasil mewarnai kamu untuk dipajangkan di halaman situs ini, serta mengisi nama, usia, tempat tinggal, alamat e-mail kamu.</div>
                <div class="uk-width-auto">
                    <a class="uk-button uk-button-small uk-button-primary green uk-width-small twb-round upload"><span uk-icon="icon: cloud-upload"></span> UPLOAD</a>
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
            // pop coloring
            $('a.zoom').on('click', function(e) {
                e.preventDefault();
                $(this).blur();
                var img = $(this).closest('div.twb-color-bw').find('img').prop('src');
                var txt = $(this).closest('div.info').find('h6').text();
                var modal = '<button class="uk-modal-close-outside" type="button" uk-close></button>' +
                '<img src="'+img+'" class="twb-popimg">' +
                '<div class="uk-padding-small uk-flex uk-flex-middle uk-flex-between">' +
                    '<div>'+ txt +'</div>' +
                    '<ul class="uk-subnav uk-subnav-divider uk-margin-remove">' +
                        '<li><a href="" class="uk-text-capitalize" title="Print"><i class="fa fa-print"></i> Print</a></li>' +
                        '<li><a href="'+img+'" class="uk-text-capitalize" title="Download" target="_blank"><i class="fa fa-download"></i> Download</a></li>' +
                    '</ul>' +
                '</div>';
                var uikitModal = UIkit.modal.dialog(modal);
            });
            // pop galeri
            $('a.thumb').on('click', function(e) {
                e.preventDefault();
                $(this).blur();
                var img = $(this).find('img').prop('src');
                var txt = $(this).closest('div.twb-color').find('h6').text();
                var person = $(this).closest('div.twb-color').find('.person').text();
                var modal = '<button class="uk-modal-close-outside" type="button" uk-close></button>' +
                '<img src="'+img+'" class="twb-popimg">' +
                '<div class="uk-padding-small">' +
                    '<h6 class="uk-margin-remove">'+ txt +'</h6>' +
                    '<div class="uk-flex uk-flex-middle uk-flex-between">' +
                        '<div>'+ person +'</div>' +
                        '<ul class="uk-subnav uk-subnav-divider uk-margin-remove">' +
                            '<li><a href="" class="uk-text-capitalize" title="Print"><i class="fa fa-print"></i> Print</a></li>' +
                            '<li><a href="'+img+'" class="uk-text-capitalize" title="Download" target="_blank"><i class="fa fa-download"></i> Download</a></li>' +
                        '</ul>' +
                    '</div>' +
                '</div>';
                var uikitModal = UIkit.modal.dialog(modal);
            });

            // pop upload
            $('a.upload').on('click', function(e) {
                e.preventDefault();
                $(this).blur();
                var modal = '<button class="uk-modal-close-outside" type="button" uk-close></button>' +
                '<div class="uk-modal-header uk-padding-small twb-popimg twb-blue"><h5 class="uk-modal-title white-text twb-pop-title">MENGUNGGAH HASIL MEWARNAI</h5></div>' +
                '<form class="uk-grid-collapse" action="" uk-grid>' +
                    '<div class="uk-width-1-2">' +
                        '<div class="twb-pop-left uk-padding-small">' +
                            '<div class="uk-margin-small-bottom">' +
                                '<label class="uk-form-label" for="judul">Judul Karya *</label>' +
                                '<div class="uk-form-controls">' +
                                    '<input class="uk-input uk-form-small twb-round" id="judul" type="text" placeholder="">' +
                                '</div>' +
                            '</div>' +
                            '<div class="uk-margin-small-bottom">' +
                                '<label class="uk-form-label" for="nama">Nama *</label>' +
                                '<div class="uk-form-controls">' +
                                    '<input class="uk-input uk-form-small twb-round" id="nama" type="text" placeholder="">' +
                                '</div>' +
                            '</div>' +
                            '<div class="uk-margin-small-bottom">' +
                                '<label class="uk-form-label" for="lahir">Tanggal Lahir *</label>' +
                                '<div class="uk-form-controls">' +
                                    '<input class="uk-input uk-form-small twb-round" id="lahir" type="text" placeholder="DD/MM/YYYY">' +
                                '</div>' +
                            '</div>' +
                            '<div class="uk-margin-small-bottom">' +
                                '<label class="uk-form-label" for="alamat">Alamat *</label>' +
                                '<textarea class="uk-textarea uk-form-small twb-round" id="alamat"></textarea>' +
                            '</div>' +
                            '<div class="uk-margin-small-bottom">' +
                                '<label class="uk-form-label" for="kota">Kota *</label>' +
                                '<div class="uk-form-controls">' +
                                    '<input class="uk-input uk-form-small twb-round" id="kota" type="text" placeholder="">' +
                                '</div>' +
                            '</div>' +
                            '<div class="">' +
                                '<label class="uk-form-label" for="email">Email *</label>' +
                                '<div class="uk-form-controls">' +
                                    '<input class="uk-input uk-form-small twb-round" id="email" type="email" placeholder="alamat@email.com">' +
                                '</div>' +
                            '</div>' +
                        '</div>' +
                    '</div>' +
                    '<div class="uk-width-1-2">' +
                        '<div class="twb-pop-right uk-padding-small">' +
                            '<div class="uk-margin-small-bottom">' +
                                'upload here' +
                            '</div>' +
                            '<div class="uk-flex uk-flex-middle uk-flex-between">' +
                                '<span class="red-text">*) Wajib diisi</span>' +
                                '<button class="uk-button uk-button-small uk-button-primary twb-round green" title="Upload">SELESAI</a>' +
                            '</div>' +
                        '</div>' +
                    '</div>' +
                '</form>';
                var uikitModal = UIkit.modal.dialog(modal);
            });
        });
    </script>
@endsection
