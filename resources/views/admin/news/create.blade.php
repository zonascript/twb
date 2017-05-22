@extends('admin.layouts.default')

@section('page-level-styles')

@endsection

@section('content')

    <form class="uk-form uk-form-stacked uk-grid" action="{!! action('NewsController@store') !!}" method="POST">
        <div class="uk-width-2-3">

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
                        @if(old('title') != '') value="{!! old('title') !!}" @endif autofocus/>
                    </div>
                </div>
            </div>
            <div class="uk-form-row">
                <label class="uk-form-label" for="">Content</label>
                <div class="uk-form-controls">
                    <textarea class="uk-input textarea" name="content"></textarea>
                </div>
            </div>
        </div>
        <div class="uk-width-1-3 uk-margin-top">
            <div class="uk-card uk-card-default uk-card-body uk-width-1-1@m">
                <div class="uk-margin">
                    <div class="uk-form-row">
                        <div class="uk-form-row">
                            <label class="uk-form-label" for="">Publish Date</label>
                            <div class="uk-form-controls">
                                <input type="text" class="uk-input" name="publish_date" />
                            </div>
                        </div>
                        <div class="uk-form-row uk-margin">
                            <a href="{!! action('NewsController@index') !!}" class="uk-button uk-button-default uk-button-small">Back</a>
                            <button type="submit" class="uk-button uk-button-default uk-button-small" name="status" value="publish">Publish</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="uk-card uk-card-default uk-card-body uk-width-1-1@m uk-margin-top">
                <div class="featured-image-viewer">

                </div>
                <input type="hidden" name="featured_image_id" class="featured-image-id"/>
                <a class="uk-button uk-button-default featured-image-add-button" href="#featured-image-modal" uk-toggle>Add Image</a>
                <a class="uk-button uk-button-default featured-image-remove-button" href="javascript:;">Remove Image</a>
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
@endsection
