@extends('admin.layouts.default')

@section('page-level-styles')
    <link rel="stylesheet" href="{!! asset('assets/css/datepicker.min.css') !!}" />
@endsection

@section('content')

    @if (count($errors) > 0)
        <div class="uk-alert-danger" uk-alert>
            <a class="uk-alert-close" uk-close></a>
            @foreach ($errors->all() as $error)
                <p>{{ $error }}</p>
            @endforeach
        </div>
    @endif

    @if (session('message'))
        <div class="uk-alert-success" uk-alert>
            <a class="uk-alert-close" uk-close></a>
            <p>{{ session('message') }}</p>
        </div>
    @endif

    <h3>
        @if(isset($pageTitle)) {!! $pageTitle !!}@endif
    </h3>
    <form class="uk-form" action="{!! action('ProductController@update', $post->id) !!}" method="POST">
        {!! csrf_field() !!}
        <div class="uk-grid-small" uk-grid>
            <div class="uk-width-2-3">
                @include('admin.includes.main-edit')
            </div>
            <div class="uk-width-1-3">
                <div class="uk-card uk-card-small uk-margin k-border white">
                    <div class="uk-card-body">
                        <div class="uk-margin-bottom">
                            <label class="uk-form-label" for="product_type">Product Type</label>
                            <select name="product_type" id="product_type" class="uk-select">
                                @foreach($productTypes as $key => $val)
                                    <option value="{{  $key }}" @if ($key == $post->product_type) selected @endif>{{ $val }}</option>
                                @endforeach
                            </select>
                        </div>
                        <label class="uk-form-label" for="">Publish Date</label>
                        <input type="text" class="uk-input" name="publish_date" data-uk-datepicker="{format:'DD/MM/YYYY',maxDate:0}"
                        @if(old('publish_date') != '')
                        value="{!! old('publish_date') !!}"
                        @else
                        value="{!! \Carbon\Carbon::createFromFormat('Y-m-d H:i:s', $post->publish_at)->format('d/m/Y') !!}"
                        @endif />
                    </div>
                    <div class="uk-card-footer uk-flex uk-flex-middle uk-flex-between">
                        <a href="{!! action('ProductController@index') !!}" class="uk-button uk-button-default">Back</a>
                        <button type="submit" class="uk-button uk-button-primary" name="status" value="publish">Publish</button>
                    </div>
                </div>

                @include('admin.includes.featured-sidebar-edit')

            </div>
        </div>
    </form>

    @include('admin.includes.featured-modal')
@endsection

@section('page-level-scripts')
    <script src="{!! asset('assets/js/tinymce/tinymce.min.js') !!}"></script>
    <script src="{!! asset('assets/js/plupload/plupload.full.min.js') !!}"></script>
    <script src="{!! asset('assets/js/editor.js') !!}"></script>
    <script src="{!! asset('assets/js/featured-image.js') !!}"></script>
    <script src="{!! asset('assets/js/uikit.2.min.js') !!}"></script>
    <script src="{!! asset('assets/js/datepicker.min.js') !!}"></script>
@endsection
