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
