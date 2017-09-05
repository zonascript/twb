@extends('admin.layouts.default')

@section('page-level-styles')
@endsection

@section('content')

    <h3>
        @if(isset($pageTitle)) {!! $pageTitle !!}@endif
    </h3>

    <div class="uk-grid-small uk-child-width-1-2 uk-grid-match" uk-grid>
        <div>
            <div class="uk-card uk-card-default uk-card-small">
                <div class="uk-card-header">
                    <h5 class="uk-card-title">Participant</h5>
                </div>
                <div class="uk-card-body">
                    Participants : {!! $participants !!}
                </div>
            </div>
        </div>
        <div>
            <div class="uk-card uk-card-default uk-card-small">
                <div class="uk-card-header">
                    <h5 class="uk-card-title">Images</h5>
                </div>
                <div class="uk-card-body">
                    Images : {!! $allCoins !!} <br>
                    Open : {!! $open !!} <br>
                    Approved : {!! $approved !!} <br>
                    Rejected : {!! $rejected !!}
                </div>
            </div>
        </div>
    </div>

@endsection

@section('page-level-scripts')
@endsection
