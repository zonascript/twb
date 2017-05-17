@extends('admin.layouts.default')

@section('page-level-styles')

@endsection

@section('content')
<div class="uk-grid">
    <div class="uk-width-1-1">
        <form class="uk-form uk-form-stacked" action="{!! action('NewsController@store') !!}" method="POST">
            {!! csrf_field() !!}

            @if (count($errors) > 0)
                <div class="uk-alert uk-alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <div class="uk-margin">
                <div class="uk-form-row">
                    <label class="uk-form-label" for="">Title</label>
                    <div class="uk-form-controls">
                        <input class="uk-input" type="text" name="title"
                        @if(old('title') != '') value="{!! old('title') !!}" @endif/>
                    </div>
                </div>
            </div>
            <div class="uk-form-row">
                <label class="uk-form-label" for="">Content</label>
                <div class="uk-form-controls">
                    <textarea class="uk-input textarea" name="content"></textarea>
                </div>
            </div>
            <div class="uk-margin">
                <div class="uk-form-row">
                    <a href="{!! action('NewsController@index') !!}" class="uk-button uk-button-default uk-button-small">Back</a>
                    <button type="submit" class="uk-button uk-button-default uk-button-small">Save</button>
                </div>
            </div>
        </form>
    </div>
</div>
@endsection

@section('page-level-scripts')
    <script src="{!! asset('assets/js/tinymce/tinymce.min.js') !!}"></script>
    <script>
        tinymce.init({
            selector :'.textarea',
            plugins : [ 'advlist lists link image searchreplace wordcount code kleurimage' ],
            baseUrl : '{!! url('/') !!}',
            toolbar1 : 'insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image | code kleurimage',
            image_advtab : true,
            menubar : false,
            relative_urls: false,
            convert_urls: false,
            force_p_newlines : false,
            forced_root_block : '',
            height : "300"
        });
    </script>
@endsection
