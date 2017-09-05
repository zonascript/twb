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
    <div class="uk-margin-bottom">
        <form class="uk-card uk-card-body uk-card-small uk-card-default uk-width-auto" method="post">
            {!! csrf_field() !!}
            <div class="uk-flex uk-flex-middle uk-margin">
                <label class="uk-form-label uk-width-small">Upload Date</label>
                <input class="uk-input uk-form-small uk-width-small uk-margin-small-right" name="start_date" data-uk-datepicker="{format:'YYYY-MM-DD'}" value="{!! $startDate !!}" /> - <input class="uk-input uk-form-small uk-width-small uk-margin-small-left" name="end_date" data-uk-datepicker="{format:'YYYY-MM-DD'}" value="{!! $endDate !!}" />
            </div>
            <div class="uk-flex uk-flex-middle uk-margin">
                <label class="uk-form-label uk-width-small">Score</label>
                <input class="uk-input uk-form-small uk-width-small uk-margin-small-right" name="score_min" placeholder="Min Score" value="{!! $scoreMin !!}" /> - <input class="uk-input uk-form-small uk-width-small uk-margin-small-left" name="score_max" placeholder="Max Score" value="{!! $scoreMax !!}" />
            </div>
            <div class="uk-form-controls uk-margin uk-flex uk-flex-middle uk-flex-between">
                <div class="uk-inline"><input class="uk-checkbox" type="checkbox" value="1" name="is_completed"> Is Completed ?</div>
                <button type="submit" class="uk-button uk-button-primary uk-button-small" value="Search">Filter</button>
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
                {{--<th>Mother Name</th>--}}
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
                    'start_date': '{!! $startDate !!}',
                    'end_date': '{!! $endDate !!}',
                    'score_min': '{!! $scoreMin !!}',
                    'score_max': '{!! $scoreMax !!}'
                }
            },
            columns: [
                {data: 'id', name: 'id', width: '5%'},
                {data: 'name', name: 'name', width: '15%'},
                {data: 'email', name: 'email', width: '20%'},
//                {data: 'detail.address', name: 'detail.address', width: '25%'},
                {data: 'num_of_images', name: 'num_of_images', width: '10%'},
                {data: 'score_sum', name: 'score_sum', width: '10%'},
//                {data: 'detail.mother_name', name: 'detail.mother_name', width: '15%'},
                {data: 'action', name: 'action', orderable: false, searchable: false, width: '10%'}
            ]
        });
    });
</script>
@endsection
