@extends('admin.layouts.default')

@section('page-level-styles')
<link rel="stylesheet" href="//cdn.datatables.net/1.10.7/css/jquery.dataTables.min.css">
@endsection

@section('content')
<div class="uk-grid">
    <div class="uk-width-1-1">
        <h4>Permission</h4>
        <div>
            <a href="{!! action('PermissionController@create') !!}"/>Add</a>
        </div>
        <table class="uk-table" id="thetable">
            <thead>
            <tr>
                <th>Id</th>
                <th>Show Name</th>
                <th>Name</th>
                <th class="text-center">Action</th>
            </tr>
            </thead>
        </table>
    </div>
</div>
@endsection

@section('page-level-scripts')
<!-- DataTables -->
<script src="//cdn.datatables.net/1.10.7/js/jquery.dataTables.min.js"></script>

<script type="text/javascript">
    $(function() {
        $('#thetable').DataTable({
            processing: true,
            serverSide: true,
            ajax: '{!! action('PermissionController@datatableList') !!}',
            columns: [
                {data: 'id', name: 'id', 'width': '80px'},
                {data: 'show_name', name: 'show_name'},
                {data: 'name', name: 'name'},
                {data: 'action', name: 'action', orderable: false, searchable: false, "width": "100px"}
            ]
        });
    });
</script>
@endsection
