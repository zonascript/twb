@extends('admin.layouts.default')

@section('page-level-styles')
@endsection

@section('content')

    <h3>
        @if(isset($pageTitle)) {!! $pageTitle !!}@endif
    </h3>

    <div class="uk-card">
        <div class="uk-card-header">
            <h5 class="uk-card-title">Participant</h5>
        </div>
        <div class="uk-card-body">
            Participants : {!! $participants !!}
        </div>
    </div>

    <div class="uk-card">
        <div class="uk-card-header">
            <h5 class="uk-card-title">Images</h5>
        </div>
        <div class="uk-card-body">
            Images : {!! $allCoins !!}
            Open : {!! $open !!}
            Approved : {!! $approved !!}
            Rejected : {!! $rejected !!}
        </div>
    </div>

@endsection

@section('page-level-scripts')
@endsection
