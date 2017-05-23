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

    <h3>
        @if(isset($pageTitle)) {!! $pageTitle !!}@endif
    </h3>

    <form class="uk-form" action="{!! action('VideoController@store') !!}" method="POST">
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
                        <a href="{!! action('VideoController@index') !!}" class="uk-button uk-button-default">Back</a>
                        <button type="submit" class="uk-button uk-button-primary" name="status" value="publish">Publish</button>
                    </div>
                </div>

                <div class="uk-card uk-card-small k-border white">
                    <h5 class="uk-card-header uk-margin-remove">Video Link (Youtube)</h5>

                    <div class="uk-card uk-card-default uk-card-body uk-width-1-1@m uk-margin-remove">
                        {{--<label class="uk-form-label" for="">Video Link (Youtube)</label>--}}
                        <input type="text" name="video_link" class="uk-input video-link" />
                        <div class="youtube-viewer uk-margin"></div>
                    </div>

                </div>

            </div>
            {{--end of sidebar--}}

        </div>
    </form>

@endsection

@section('page-level-scripts')
    <script src="{!! asset('assets/js/tinymce/tinymce.min.js') !!}"></script>
    <script src="{!! asset('assets/js/plupload/plupload.full.min.js') !!}"></script>
    <script src="{!! asset('assets/js/editor.js') !!}"></script>
    <script src="{!! asset('assets/js/video-link.js') !!}"></script>
    <script src="{!! asset('assets/js/uikit.2.min.js') !!}"></script>
    <script src="{!! asset('assets/js/datepicker.min.js') !!}"></script>
@endsection
