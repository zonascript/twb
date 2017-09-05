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

    <a href="{!! backendUrl('coins/participant') !!}" class="uk-button uk-button-default">Back</a>

    <table class="uk-table" id="thetable">
        <thead>
        <tr>
            <th>Id</th>
            <th>Coin Image</th>
            <th>Type</th>
            <th>Date</th>
            {{--<th>Name</th>--}}
            {{--<th>Email</th>--}}
            <th>Score</th>
            {{--<th>Mother Name</th>--}}
            <th>Status</th>
            {{--<th class="uk-text-center">Action</th>--}}
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
                ajax: '{!! action('CoinController@participantImagesDatatable', ['userId' => $user->id]) !!}',
                columns: [
                    {data: 'id', name: 'id', width: '5%'},
                    {
                        data: 'file_path',
                        name: 'file_path',
                        width: '15%',
                        orderable: false,
                        searchable: false,
                        render: function (data) {
                            return '<img src="'+$publicUrl+'/'+data+'" >';
                        }
                    },
                    {data: 'type', name: 'type', width: '20%'},
                    {data: 'image_date', name: 'image_date', width: '20%'},
//                    {data: 'user.name', name: 'user.name', width: '15%'},
//                    {data: 'user.email', name: 'user.email', width: '15%'},
                    {data: 'score', name: 'score', width: '15%'},
//                    {data: 'user.detail.mother_name', name: 'user.detail.mother_name', width: '15%'},
                    {data: 'status_description', name: 'status_description', width: '15%'}
//                    {data: 'action', name: 'action', orderable: false, searchable: false, width: '5%'}
                ]
            });
        });
    </script>
@endsection
