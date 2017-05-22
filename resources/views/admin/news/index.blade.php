@extends('admin.layouts.default')

@section('page-level-styles')
{{-- <link rel="stylesheet" href="//cdn.datatables.net/1.10.7/css/jquery.dataTables.min.css"> --}}
<link rel="stylesheet" href="{!! asset('assets/css/dataTables.uikit.min.css') !!}" />
@endsection

@section('content')

    <h3>
        @if(isset($pageTitle)) {!! $pageTitle !!}@endif
        <a href="{!! action('NewsController@create') !!}" class="uk-button uk-button-primary uk-button-small uk-margin-left">Add New</a>
    </h3>
    <table class="uk-table" id="thetable">
        <thead>
        <tr>
            <th>Id</th>
            <th>Title</th>
            <th>Excerpt</th>
            <th>Action</th>
        </tr>
        </thead>
    </table>

@endsection

@section('page-level-scripts')
<!-- DataTables -->
<script src="//cdn.datatables.net/1.10.7/js/jquery.dataTables.min.js"></script>
<script src="{!! asset('assets/js/dataTables.uikit.js') !!}"></script>

<script type="text/javascript">
    $(function() {
        $('#thetable').DataTable({
            processing: true,
            serverSide: true,
            ajax: '{!! action('NewsController@datatableList') !!}',
            columns: [
                {data: 'id', name: 'id', width: '10%'},
                {data: 'title', name: 'title', width: '30%'},
                {data: 'excerpt', name: 'excerpt', width: '40%'},
                {data: 'action', name: 'action', orderable: false, searchable: false, width: '20%'}
            ]
        });
    });
</script>
@endsection
