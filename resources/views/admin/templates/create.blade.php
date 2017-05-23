@extends('admin.layouts.default')

@section('page-level-styles')

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

    <h3>
        @if(isset($pageTitle)) {!! $pageTitle !!}@endif
    </h3>

    <form class="uk-form" action="{!! action('TemplateController@store') !!}" method="POST" enctype="multipart/form-data">
        {!! csrf_field() !!}
        <div class="uk-grid-small" uk-grid>
            <div class="uk-width-2-3">
                @include('admin.includes.main')
            </div>

            <div class="uk-width-1-3">
                <div class="uk-card uk-card-small uk-margin k-border white">
                    <div class="uk-card-body">
                        <label class="uk-form-label" for="">Publish Date</label>
                        <input type="text" class="uk-input" name="publish_date"
                               data-uk-datepicker="{format:'DD/MM/YYYY',maxDate:0}"
                               @if(old('publish_date') != '')value="{!! old('publish_date') !!}"@endif />
                    </div>
                    <div class="uk-card-footer uk-flex uk-flex-middle uk-flex-between">
                        <a href="{!! action('TemplateController@index') !!}" class="uk-button uk-button-default">Back</a>
                        <button type="submit" class="uk-button uk-button-primary" name="status" value="publish">Publish</button>
                    </div>
                </div>

                <div class="uk-card uk-card-small k-border white">
                    <div class="uk-card uk-card-default uk-card-body uk-width-1-1@m uk-margin-remove">
                        <div class="uk-margin">
                            <label class="uk-form-label" for="">Template Image</label>
                            <div class="featured-image-viewer"></div>
                            <input type="hidden" name="featured_image_id" class="featured-image-id"/>
                            <a class="uk-button uk-button-default featured-image-add-button" href="#featured-image-modal" uk-toggle>Add Image</a>
                            <a class="uk-button uk-button-default featured-image-remove-button" href="javascript:;">Remove Image</a>
                        </div>
                        <div class="uk-margin">
                            <label class="uk-form-label" for="">Template File</label>
                            <input type="file" class="uk-input" name="template_file" />
                        </div>
                    </div>
                </div>
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
