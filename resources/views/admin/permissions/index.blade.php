@extends('admin.layouts.default')

@section('page-level-styles')
{{-- <link rel="stylesheet" href="//cdn.datatables.net/1.10.7/css/jquery.dataTables.min.css"> --}}
<link rel="stylesheet" href="{!! asset('assets/css/dataTables.uikit.min.css') !!}" />
@endsection

@section('content')

    <h3>
        @if(isset($pageTitle)) {!! $pageTitle !!}@endif
        <a href="{!! action('PermissionController@create') !!}" class="uk-button uk-button-primary uk-button-small uk-margin-left">Add New</a>
    </h3>
    <table class="uk-table" id="thetable">
        <thead>
            <tr>
                <th>Id</th>
                <th>Show Name</th>
                <th>Name</th>
                <th>Action</th>
            </tr>
        </thead>
    </table>

@endsection

@section('page-level-scripts')
<!-- DataTables -->
<script src="{!! asset('assets/js/jquery.dataTables.min.js') !!}"></script>
<script src="{!! asset('assets/js/dataTables.uikit.js') !!}"></script>

<script type="text/javascript">
    $(function() {
        $('#thetable').DataTable({
            processing: true,
            serverSide: true,
            ajax: '{!! action('PermissionController@datatableList') !!}',
            columns: [
                {data: 'id', name: 'id', width: '10%'},
                {data: 'show_name', name: 'show_name', width: '30%'},
                {data: 'name', name: 'name', width: '30%'},
                {data: 'action', name: 'action', orderable: false, searchable: false, width: '30%'}
            ]
        });
    });
</script>
@endsection
