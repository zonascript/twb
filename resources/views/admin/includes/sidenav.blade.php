<div class="k-sidenav uk-overflow-auto">
    <ul class="uk-nav-default uk-nav-parent-icon" uk-nav="duration: 300; transition: linear;">
        <li class="uk-active"><a href="{!! route('admin') !!}"><span class="uk-margin-small-right" uk-icon="icon: home"></span> Dashboard</a></li>
        <li class="uk-parent">
            <a href="#"><span class="uk-margin-small-right" uk-icon="icon: file-edit"></span> News</a>
            <ul class="uk-nav-sub">
                <li><a href="{!! action('NewsController@index') !!}">All News</a></li>
                <li><a href="{!! action('NewsController@create') !!}">Create New</a></li>
            </ul>
        </li>
        <li class="uk-parent">
            <a href="#"><span class="uk-margin-small-right" uk-icon="icon: calendar"></span> Events</a>
            <ul class="uk-nav-sub">
                <li><a href="{!! action('EventController@index') !!}">All Event</a></li>
                <li><a href="{!! action('EventController@create') !!}">Create New</a></li>
            </ul>
        </li>
        <li class="uk-parent">
            <a href="#"><span class="uk-margin-small-right" uk-icon="icon: video-camera"></span> Videos</a>
            <ul class="uk-nav-sub">
                <li><a href="#">All Videos</a></li>
                <li><a href="#">Upload</a></li>
            </ul>
        </li>
        <li class="uk-parent">
            <a href="#"><span class="uk-margin-small-right" uk-icon="icon: paint-bucket"></span> Templates</a>
            <ul class="uk-nav-sub">
                <li><a href="#">All Template</a></li>
                <li><a href="#">Upload</a></li>
            </ul>
        </li>
        <li class="uk-parent">
            <a href="#"><span class="uk-margin-small-right" uk-icon="icon: star"></span> Campaign</a>
            <ul class="uk-nav-sub">
                <li><a href="#">Users</a></li>
                <li><a href="#">Images</a></li>
            </ul>
        </li>
        <li class="uk-nav-divider"></li>
        <li class="uk-parent">
            <a href="#"><span class="uk-margin-small-right" uk-icon="icon: image"></span> Media</a>
            <ul class="uk-nav-sub">
                <li><a href="#">Images</a></li>
            </ul>
        </li>
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
