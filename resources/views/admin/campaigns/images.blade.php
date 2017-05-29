@extends('admin.layouts.default')

@section('page-level-styles')
{{-- <link rel="stylesheet" href="//cdn.datatables.net/1.10.7/css/jquery.dataTables.min.css"> --}}
<link rel="stylesheet" href="{!! asset('assets/css/dataTables.uikit.min.css') !!}" />

@endsection

@section('content')

    <h3>
        @if(isset($pageTitle)) {!! $pageTitle !!}@endif
        {{--<a href="{!! action('UserController@create') !!}" class="uk-button uk-button-primary uk-button-small uk-margin-left">Add New</a>--}}
    </h3>
    <table class="uk-table" id="thetable">
        <thead>
            <tr>
                <th>Id</th>
                <th>Coloring Image</th>
                <th>Title</th>
                <th>Name</th>
                <th>Email</th>
                <th>Address</th>
                <th>City</th>
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
            ajax: '{!! action('CampaignController@imageDatatable') !!}',
            columns: [
                {data: 'id', name: 'id', width: '5%'},
                {
                    data: 'file_path',
                    name: 'file_path',
                    width: '15%',
                    render: function (data) {
                        return '<img src="'+$publicUrl+'/'+data+'" >';
                    }
                },
                {data: 'title', name: 'title', width: '20%'},
                {data: 'user_name', name: 'user_name', width: '15%'},
                {data: 'user_email', name: 'user_email', width: '15%'},
                {data: 'user_address', name: 'user_address', width: '15%'},
                {data: 'user_city', name: 'user_city', width: '15%'},
                {data: 'action', name: 'action', orderable: false, searchable: false, width: '5%'}
            ]
        });
    });
</script>
@endsection
