@extends('admin.layouts.default')

@section('page-level-styles')
<link rel="stylesheet" href="//cdn.datatables.net/1.10.7/css/jquery.dataTables.min.css">
@endsection

@section('content')
<div class="uk-grid">
    <div class="uk-width-1-1">
        <h4>User</h4>
        <div>
            <a href="{!! action('UserController@create') !!}"/>Add</a>
        </div>
        <table class="uk-table" id="thetable">
            <thead>
            <tr>
                <th>Id</th>
                <th>Name</th>
                <th>Email</th>
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
            ajax: '{!! action('UserController@datatableList') !!}',
            columns: [
                {data: 'id', name: 'id', 'width': '80px'},
                {data: 'name', name: 'name'},
                {data: 'email', name: 'email'},
                {data: 'action', name: 'action', orderable: false, searchable: false, "width": "100px"}
            ]
        });
    });
</script>
@endsection
