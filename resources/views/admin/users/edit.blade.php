@extends('admin.layouts.default')

@section('page-level-styles')

@endsection

@section('content')
    <div class="uk-grid">
        <div class="uk-width-1-1">
            <form class="uk-form uk-form-stacked" action="{!! url('setting/user/' . $id . '/update') !!}" method="POST">
                {!! csrf_field() !!}
                <div class="uk-form-row">
                    <label class="uk-form-label" for="">Name</label>
                    <div class="uk-form-controls">
                        <input class="uk-input" type="text" name="name" value="{!! $user->name !!}" />
                    </div>
                </div>
                <div class="uk-margin">
                    <div class="uk-form-row">
                        <label class="uk-form-label" for="">Email</label>
                        <div class="uk-form-controls">
                            <input class="uk-input" type="email" name="email" value="{!! $user->email !!}" />
                        </div>
                    </div>
                </div>
                <div class="uk-margin">
                    <div class="uk-form-row">
                        <label class="uk-form-label">Roles</label>
                        <div class="uk-form-controls">
                            @foreach($roles as $role)
                                <input type="checkbox" class="uk-checkbox" name="permissions[]"
                                       value="{!! $role->name !!}"
                                        @if($user->hasRole($role)) checked @endif/> {!! $role->name !!}
                            @endforeach
                        </div>
                    </div>
                </div>
                <div class="uk-margin">
                    <div class="uk-form-row">
                        <a href="{!! url('setting/user') !!}" class="uk-button uk-button-default uk-button-small">Back</a>
                        <button type="submit" class="uk-button uk-button-default uk-button-small">Save</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection

@section('page-level-scripts')

@endsection
