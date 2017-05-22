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
    <form class="uk-form uk-form-stacked" action="{!! action('RoleController@store') !!}" method="POST">
        {!! csrf_field() !!}

        <div class="uk-margin">
            <label class="uk-form-label" for="">Name</label>
            <div class="uk-form-controls">
                <input class="uk-input" type="text" name="name"
                @if(old('name') != '')
                    value="{!! old('name') !!}"
                @endif >
            </div>
        </div>
        <div class="uk-margin">
            <label class="uk-form-label" for="">Code</label>
            <div class="uk-form-controls">
                <input class="uk-input" type="text" name="code" />
            </div>
        </div>
        <div class="uk-margin">
            <label class="uk-form-label">Permissions</label>
            <div class="uk-form-controls uk-grid-small uk-child-width-1-5" uk-grid>
                @foreach($permissions as $permission)
                    <label>
                        <input type="checkbox" class="uk-checkbox" name="permissions[]" name="permissions[]" value="{!! $permission->name !!}" />
                        {!! $permission->show_name !!}
                    </label>
                @endforeach
            </div>
        </div>
        <div class="uk-flex uk-flex-middle uk-flex-between">
            <a href="{!! action('RoleController@index') !!}" class="uk-button uk-button-default">Back</a>
            <button type="submit" class="uk-button uk-button-primary">Save</button>
        </div>
    </form>

@endsection

@section('page-level-scripts')

@endsection
