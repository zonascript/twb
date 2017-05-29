@extends('admin.layouts.default')

@section('page-level-styles')
{{-- <link rel="stylesheet" href="//cdn.datatables.net/1.10.7/css/jquery.dataTables.min.css"> --}}
<link rel="stylesheet" href="{!! asset('assets/css/dataTables.uikit.min.css') !!}" />
@endsection

@section('content')

    <h3>
        @if(isset($pageTitle)) {!! $pageTitle !!}@endif
        <a href="{!! action('ProductController@create') !!}" class="uk-button uk-button-primary uk-button-small uk-margin-left">Add New</a>
    </h3>
    <table class="uk-table" id="thetable">
        <thead>
        <tr>
            <th>Id</th>
            <th>Image</th>
            <th>Title</th>
            <th>Product Type</th>
            <th class="uk-text-center">Action</th>
        </tr>
        </thead>
    </table>

@endsection

@section('page-level-scripts')
<!-- DataTables -->
<script src="{!! asset('assets/js/jquery.dataTables.min.js') !!}"></script>
<script src="{!! asset('assets/js/dataTables.uikit.js') !!}"></script>

<script type="text/javascript">
    var $publicUrl = '{{ url('/') }}';
    $(function() {
        $('#thetable').DataTable({
            processing: true,
            serverSide: true,
            ajax: '{!! action('ProductController@datatableList') !!}',
            columns: [
                {data: 'id', name: 'id', width: '10%'},
                {
                    data: 'fullpath',
                    name: 'fullpath',
                    width: '10%',
                    render: function (data) {
                        return '<img src="'+$publicUrl+'/'+data+'" height="100px"/>';
                    }
                },
                {data: 'title', name: 'title', width: '30%'},
                {data: 'product_type', name: 'product_type', width: '30%'},
                {data: 'action', name: 'action', orderable: false, searchable: false, width: '20%'}
            ],
            "order": [[ 0, 'desc' ]]
        });
    });
</script>
@endsection
