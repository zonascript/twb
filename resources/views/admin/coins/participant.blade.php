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
                <th>Name</th>
                <th>Email</th>
                <th>Address</th>
                {{--<th>Birthdate</th>--}}
                <th>Mother Name</th>
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
    $(function() {
        $('#thetable').DataTable({
            processing: true,
            serverSide: true,
            ajax: '{!! action('CoinController@coinDatatable') !!}',
            columns: [
                {data: 'id', name: 'id', width: '5%'},
                {data: 'name', name: 'name', width: '15%'},
                {data: 'email', name: 'email', width: '20%'},
                {data: 'address', name: 'address', width: '25%'},
//                {data: 'birthdate', name: 'birthdate', width: '10%'},
                {data: 'mother_name', name: 'mother_name', width: '15%'},
//                {data: 'action', name: 'action', orderable: false, searchable: false, width: '10%'}
            ]
        });
    });
</script>
@endsection
