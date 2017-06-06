@extends('frontend.layouts.default')

@section('page-level-styles')
@endsection

@section('page-level-nav')
@endsection

@section('content')
    <section class="twb-content">
        <div class="uk-container uk-container-small">
            <h2 class="twb-blue-text">MACAM-MACAM PRODUK KAMI</h2>
            <div class="uk-flex uk-flex-middle">
                Tini Wini Biti biskuit imut enak bergizi yang hadir dalam berbagai varian rasa dan juga berbagai ukuran kemasan. Dapatkan Tini Wini Biti di toko dan supermarket terdekat dikotamu. Tini Wini Biti memiliki 9 varian rasa yaitu Cokelat, Keju, Strawberry, Manis, Susu, Pizza, Sate Ayam, Jagung Manis, dan Asin. Dengan rasanya yang enak dan disukai anak.
            </div>
            <div class="uk-flex uk-flex-middle uk-margin-top">
                Tini Wini Biti hadir dalam berbagai varian kemasan, yaitu 12 gr dan 20 gr selain itu juga tersedia Tini Wini Biti Family Pack, dan Tini Wini Biti Special Pack.
            </div>
            <h4 class="uk-text-uppercase">Regular Pack</h4>
            <ul class="uk-child-width-1-2 uk-child-width-1-5@m uk-text-center uk-text-capitalize" uk-grid>
                @foreach($products as $product)
                    @if($product->product_type == 'Regular Pack')
                        <li>
                            <img src="{{ asset($product->fullpath) }}" alt="{{ $product->title }}">
                            <p>{{ $product->title }}</p>
                        </li>
                    @endif
                @endforeach
            </ul>
            <h4 class="uk-text-uppercase">Family Pack</h4>
            <ul class="uk-child-width-1-2 uk-child-width-1-5@m uk-text-center uk-text-capitalize" uk-grid>
                @foreach($products as $product)
                    @if($product->product_type == 'Family Pack')
                        <li>
                            <img src="{{ asset($product->fullpath) }}" alt="{{ $product->title }}">
                            <p>{{ $product->title }}</p>
                        </li>
                    @endif
                @endforeach
            </ul>
            <h4 class="uk-text-uppercase">Special Pack</h4>
            <ul class="uk-child-width-1-2 uk-child-width-1-5@m uk-text-center uk-text-capitalize" uk-grid>
                @foreach($products as $product)
                    @if($product->product_type == 'Special Pack')
                        <li>
                            <img src="{{ asset($product->fullpath) }}" alt="{{ $product->title }}">
                            <p>{{ $product->title }}</p>
                        </li>
                    @endif
                @endforeach
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
