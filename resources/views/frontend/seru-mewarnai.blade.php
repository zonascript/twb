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
            <div class="uk-child-width-1-1@s uk-child-width-1-3@m uk-grid-small gallery-container" uk-grid></div>
            <ul class="uk-pagination twb-pagination gallery-nav-container" uk-margin></ul>
        </div>

        @include('frontend.includes.upload-modal')

    </section>
@endsection

@section('page-level-scripts')
    <script src="{!! asset('assets/js/moment.min.js') !!}"></script>
    <script>
        var isLoggedIn = @if(auth()->check()) 'true'; @else 'false'; @endif
    </script>
    <script src="{!! asset('assets/js/jquery.form.min.js') !!}"></script>
    <script src="{!! asset('assets/js/coloring-template.js') !!}"></script>
    <script src="{!! asset('assets/js/seru-mewarnai.js') !!}"></script>
    <script src="{!! asset('assets/js/gallery.js') !!}"></script>
    <script>
        loadTemplate('template-paginated', 'template-paginated');
        loadGallery('coloring-paginated', 'coloring-paginated');
    </script>
@endsection
