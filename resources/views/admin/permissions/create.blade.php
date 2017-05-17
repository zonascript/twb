@extends('admin.layouts.default')

@section('page-level-styles')

@endsection

@section('content')
<div class="uk-grid">
    <div class="uk-width-1-1">
        <form class="uk-form uk-form-stacked" action="{!! action('PermissionController@store') !!}" method="POST">
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
                    <label class="uk-form-label" for="">Show Name</label>
                    <div class="uk-form-controls">
                        <input class="uk-input" type="text" name="show_name"
                        @if(old('show_name') != '') value="{!! old('show_name') !!}" @endif/>
                    </div>
                </div>
            </div>
            <div class="uk-form-row">
                <label class="uk-form-label" for="">Name</label>
                <div class="uk-form-controls">
                    <input class="uk-input" type="text" name="name"
                    @if(old('name') != '') value="{!! old('name') !!}" @endif/>
                </div>
            </div>
            <div class="uk-margin">
                <div class="uk-form-row">
                    <a href="{!! action('PermissionController@index') !!}" class="uk-button uk-button-default uk-button-small">Back</a>
                    <button type="submit" class="uk-button uk-button-default uk-button-small">Save</button>
                </div>
            </div>
        </form>
    </div>
</div>
@endsection

@section('page-level-scripts')

@endsection
