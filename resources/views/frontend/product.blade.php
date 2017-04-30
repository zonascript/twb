@extends('frontend.layouts.default')

@section('page-level-styles')
@endsection

@section('page-level-nav')
@endsection

@section('content')
    <section class="twb-content">
        <div class="uk-container uk-container-small">
            <h2 class="twb-blue-text">MACAM-MACAM PRODUK KAMI</h2>
            <h4 class="uk-text-uppercase">Regular Pack</h4>
            <ul class="uk-child-width-1-2 uk-child-width-1-5@m uk-text-center uk-text-capitalize" uk-grid>
                <li>
                    <img src="{!! asset('images/sample-content/product-asin.png') !!}" alt="Tini Wini Biti">
                    <p>Asin</p>
                </li>
                <li>
                    <img src="{!! asset('images/sample-content/product-keju.png') !!}" alt="Tini Wini Biti">
                    <p>keju</p>
                </li>
                <li>
                    <img src="{!! asset('images/sample-content/product-jagung.png') !!}" alt="Tini Wini Biti">
                    <p>jagung</p>
                </li>
                <li>
                    <img src="{!! asset('images/sample-content/product-cokelat.png') !!}" alt="Tini Wini Biti">
                    <p>cokelat</p>
                </li>
                <li>
                    <img src="{!! asset('images/sample-content/product-stroberi.png') !!}" alt="Tini Wini Biti">
                    <p>stroberi</p>
                </li>
                <li>
                    <img src="{!! asset('images/sample-content/product-sate.png') !!}" alt="Tini Wini Biti">
                    <p>sate</p>
                </li>
                <li>
                    <img src="{!! asset('images/sample-content/product-manis.png') !!}" alt="Tini Wini Biti">
                    <p>manis</p>
                </li>
                <li>
                    <img src="{!! asset('images/sample-content/product-pizza.png') !!}" alt="Tini Wini Biti">
                    <p>pizza</p>
                </li>
                <li>
                    <img src="{!! asset('images/sample-content/product-susu.png') !!}" alt="Tini Wini Biti">
                    <p>susu</p>
                </li>
                <li>
                    <img src="{!! asset('images/sample-content/product-comingsoon.png') !!}" alt="Tini Wini Biti">
                    <p>Rumput Laut</p>
                </li>
            </ul>
            <h4 class="uk-text-uppercase">Family Pack</h4>
            <ul class="uk-child-width-1-2 uk-child-width-1-5@m uk-text-center uk-text-capitalize" uk-grid>
                <li>
                    <img src="{!! asset('images/sample-content/product-family-stroberi.png') !!}" alt="Tini Wini Biti">
                    <p>Stroberi</p>
                </li>
                <li>
                    <img src="{!! asset('images/sample-content/product-family-keju.png') !!}" alt="Tini Wini Biti">
                    <p>keju</p>
                </li>
                <li>
                    <img src="{!! asset('images/sample-content/product-family-cokelat.png') !!}" alt="Tini Wini Biti">
                    <p>cokelat</p>
                </li>
            </ul>
            <h4 class="uk-text-uppercase">Special Pack</h4>
            <ul class="uk-child-width-1-2 uk-child-width-1-5@m uk-text-center uk-text-capitalize" uk-grid>
                <li>
                    <img src="{!! asset('images/sample-content/product-special-ceria.png') !!}" alt="Tini Wini Biti">
                    <p>Ceria</p>
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
