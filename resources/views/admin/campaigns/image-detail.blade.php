@extends('admin.layouts.default')

@section('page-level-styles')
@endsection

@section('content')

    <h3>
        @if(isset($pageTitle)) {!! $pageTitle !!}@endif
    </h3>


@endsection

@section('page-level-scripts')

<script type="text/javascript">

</script>
@endsection
