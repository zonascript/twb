@extends('admin.layouts.default')

@section('page-level-styles')
    <link rel="stylesheet" href="{!! asset('assets/css/dataTables.uikit.min.css') !!}" />
@endsection

@section('content')
    <h3>
        @if(isset($pageTitle)) {!! $pageTitle !!}@endif
        <a href="{!! action('TemplateController@create') !!}" class="uk-button uk-button-primary uk-button-small uk-margin-left">Add New</a>
    </h3>

    <table class="uk-table" id="thetable">
        <thead>
        <tr>
            <th>Id</th>
            <th>Title</th>
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
    $(function() {
        $('#thetable').DataTable({
            processing: true,
            serverSide: true,
            ajax: '{!! action('TemplateController@datatableList') !!}',
            columns: [
                {data: 'id', name: 'id', 'width': '10%'},
                {data: 'title', name: 'title', 'width': '70%'},
                {data: 'action', name: 'action', orderable: false, searchable: false, "width": "20%"}
            ],
            "order": [[ 0, 'desc' ]]
        });
    });
</script>
@endsection
