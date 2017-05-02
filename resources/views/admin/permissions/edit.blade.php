@extends('admin.layouts.default')

@section('page-level-styles')

@endsection

@section('content')
    <div class="uk-grid">
        <div class="uk-width-1-1">
            <form class="uk-form uk-form-stacked" action="{!! url('setting/permission/' . $id . '/update') !!}" method="POST">
                {!! csrf_field() !!}
                <div class="uk-form-row">
                    <label class="uk-form-label" for="">Name</label>
                    <div class="uk-form-controls">
                        <input class="uk-input" type="text" name="name" value="{!! $permission->name !!}" />
                    </div>
                </div>
                <div class="uk-margin">
                    <div class="uk-form-row">
                        <label class="uk-form-label" for="">Code</label>
                        <div class="uk-form-controls">
                            <input class="uk-input" type="text" name="code" value="{!! $permission->guard_name !!}" />
                        </div>
                    </div>
                </div>
                <div class="uk-margin">
                    <div class="uk-form-row">
                        <a href="{!! url('setting/permission') !!}" class="uk-button uk-button-default uk-button-small">Back</a>
                        <button type="submit" class="uk-button uk-button-default uk-button-small">Save</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection

@section('page-level-scripts')

@endsection
