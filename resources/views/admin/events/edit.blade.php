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
    <form class="uk-form" action="{!! action('EventController@update', $event->id) !!}" method="POST">
        {!! csrf_field() !!}
        <div class="uk-grid-small" uk-grid>
            <div class="uk-width-2-3">
                <div class="uk-margin">
                    <input class="uk-input uk-form-large uk-width-1-1" type="text" name="title" placeholder="Enter title here" value="
                    @if(old('title') != '')
                        {!! old('title') !!}
                    @else
                        {!! $event->title !!}
                    @endif ">
                </div>
                <div class="uk-card k-border">
                    <textarea class="uk-input textarea uk-width-1-1" name="content">
                        @if(old('content') != '')
                            {!! old('content') !!}
                        @else
                            {!! $event->content !!}
                        @endif
                    </textarea>
                </div>
            </div>
            <div class="uk-width-1-3">
                <div class="uk-card uk-card-small uk-margin k-border white">
                    <div class="uk-card-body">
                        <label class="uk-form-label" for="">Event Date</label>
                        <input type="text" class="uk-input" name="event_date" value="
                        @if(old('event_date') != '')
                            {!! old('event_date') !!}
                        @else
                            {!! \Carbon\Carbon::createFromFormat('Y-m-d', $event->event_date)->format('Y-m-d') !!}
                        @endif" >
                        <hr>
                        <label class="uk-form-label" for="">Publish Date</label>
                        <input type="text" class="uk-input" name="publish_date" value="
                        @if(old('publish_date') != '')
                            {!! old('publish_date') !!}
                        @else
                            {!! \Carbon\Carbon::createFromFormat('Y-m-d H:i:s', $event->publish_at)->format('Y-m-d') !!}
                        @endif " data-uk-datepicker="{format:'DD/MM/YYYY',maxDate:0}">
                    </div>
                    <div class="uk-card-footer uk-flex uk-flex-middle uk-flex-between">
                        <a href="{!! action('NewsController@index') !!}" class="uk-button uk-button-default">Back</a>
                        <button type="submit" class="uk-button uk-button-primary" name="status" value="publish">Publish</button>
                    </div>
                </div>
                <div class="uk-card uk-card-small k-border white">
                    <h5 class="uk-card-header uk-margin-remove">Featured Image</h5>
                    <div class="uk-card-body">
                        <div class="featured-image-viewer">
                            @if ($event->path != '')
                            <a href="#featured-image-modal" uk-toggle><img src="{!! url('image/featured/'.$event->path) !!}" alt="" /></a>
                            @endif
                        </div>
                        <input type="hidden" name="featured_image_id" class="featured-image-id"/>
                        <a class="uk-button uk-button-default featured-image-add-button" href="#featured-image-modal" uk-toggle>Add Image</a>
                        <a class="uk-button uk-button-default featured-image-remove-button" href="javascript:;">Remove Image</a>
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
