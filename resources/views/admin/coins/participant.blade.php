@extends('admin.layouts.default')

@section('page-level-styles')
{{-- <link rel="stylesheet" href="//cdn.datatables.net/1.10.7/css/jquery.dataTables.min.css"> --}}
<link rel="stylesheet" href="{!! asset('assets/css/dataTables.uikit.min.css') !!}" />
<link rel="stylesheet" href="{!! asset('assets/css/datepicker.min.css') !!}" />

@endsection

@section('content')

    <h3>
        @if(isset($pageTitle)) {!! $pageTitle !!}@endif
        {{--<a href="{!! action('UserController@create') !!}" class="uk-button uk-button-primary uk-button-small uk-margin-left">Add New</a>--}}
    </h3>
    <div>
        <form class="" method="post">
            {!! csrf_field() !!}
            <div class="uk-margin">
                <div class="uk-form-controls">
                    <label class="uk-form-label">Upload Date</label>
                    <input class="uk-input" name="start_date" data-uk-datepicker="{format:'YYYY-MM-DD'}"/> to <input class="uk-input" name="end_date" data-uk-datepicker="{format:'YYYY-MM-DD'}" />
                </div>
            </div>
            <div class="uk-margin">
                <div class="uk-form-controls">
                    <input class="uk-checkbox" type="checkbox" value="1" name="is_completed"> Is Completed ?
                </div>
            </div>
            <div class="uk-margin">
                <div class="uk-form-controls">
                    <label class="uk-form-label">Name</label>
                    <input class="uk-input" name="name" />
                </div>
            </div>
            <div class="uk-form-controls">
                <button type="submit" class="uk-button-small" value="Search">Search</button>
            </div>
        </form>
    </div>

    <table class="uk-table" id="thetable">
        <thead>
            <tr>
                <th>Id</th>
                <th>Name</th>
                <th>Email</th>
                {{--<th>Address</th>--}}
                <th>Images</th>
                <th>Score</th>
                <th>Mother Name</th>
                <th class="uk-text-center">Action</th>
            </tr>
        </thead>
    </table>

@endsection

@section('page-level-scripts')
<!-- DataTables -->
<script src="{!! asset('assets/js/jquery.dataTables.min.js') !!}"></script>
<script src="{!! asset('assets/js/dataTables.uikit.js') !!}"></script>
<script src="{!! asset('assets/js/uikit.2.min.js') !!}"></script>
<script src="{!! asset('assets/js/datepicker.min.js') !!}"></script>

<script type="text/javascript">
    $(function() {
        $('#thetable').DataTable({
            processing: true,
            serverSide: true,
            ajax: {
                'url': '{!! action('CoinController@coinDatatable') !!}',
                'type': 'POST',
                'data': {
                    '_token': $token,
                    'is_completed': '{!! $isCompleted !!}',
                    'name': '{!! $name !!}',
                }
            },
            columns: [
                {data: 'id', name: 'id', width: '5%'},
                {data: 'name', name: 'name', width: '15%'},
                {data: 'email', name: 'email', width: '20%'},
//                {data: 'detail.address', name: 'detail.address', width: '25%'},
                {data: 'coin_count', name: 'coin_count', width: '10%'},
                {data: 'total_score', name: 'total_score', width: '10%'},
                {data: 'detail.mother_name', name: 'detail.mother_name', width: '15%'},
                {data: 'action', name: 'action', orderable: false, searchable: false, width: '10%'}
            ]
        });
    });
</script>
@endsection
