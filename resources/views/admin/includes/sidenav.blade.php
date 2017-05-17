<div class="k-sidenav uk-overflow-auto">
    <ul class="uk-nav-default uk-nav-parent-icon" uk-nav>
        <li class="uk-active"><a href="{!! route('admin') !!}"><span class="uk-margin-small-right" uk-icon="icon: home"></span> Dashboard</a></li>
        <li class="uk-parent">
            <a href="#"><span class="uk-margin-small-right" uk-icon="icon: file-edit"></span> Posts</a>
            <ul class="uk-nav-sub">
                <li><a href="#">Create New</a></li>
                <li><a href="#">All Posts</a></li>
                <li><a href="#">Categories</a></li>
            </ul>
        </li>
        <li class="uk-parent">
            <a href="#"><span class="uk-margin-small-right" uk-icon="icon: image"></span> Media</a>
            <ul class="uk-nav-sub">
                <li><a href="#">Upload</a></li>
                <li><a href="#">All Media</a></li>
            </ul>
        </li>
        <li class="uk-nav-divider"></li>
        <li class="uk-parent">
            <a href="#"><span class="uk-margin-small-right" uk-icon="icon: settings"></span> Setting</a>
            <ul class="uk-nav-sub">
                <li><a href="{!! action('PermissionController@index') !!}">Permission</a></li>
                <li><a href="{!! action('RoleController@index') !!}">Role</a></li>
                <li><a href="{!! action('UserController@index') !!}">User</a></li>
            </ul>
        </li>
    </ul>
</div>
