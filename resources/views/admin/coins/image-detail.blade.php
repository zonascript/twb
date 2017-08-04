@extends('admin.layouts.default')

@section('page-level-styles')
@endsection

@section('content')

    <h3>
        @if(isset($pageTitle)) {!! $pageTitle !!}@endif
    </h3>
    <div class="uk-grid-medium uk-child-width-1-1@s uk-child-width-1-2@m" uk-grid>
        <div>
            <img src="{{ asset($image->file_path) }}" />
        </div>
        <div>
            {{--<form method="post" action="{{ action('CampaignController@updateStatus', $image->id) }}">--}}
{{--            {{ csrf_field() }}--}}
            <table class="uk-table uk-width-1-1">
                <tr>
                    <td width="25%">Type</td>
                    <td>{{ $image->type }}</td>
                </tr>
                <tr>
                    <td>Nama</td>
                    <td>{{ $image->user->name }}</td>
                </tr>
                <tr>
                    <td>Alamat</td>
                    <td>{{ $image->user->detail->address }}</td>
                </tr>
                <tr>
                    <td>Mother Name</td>
                    <td>{{ $image->user->detail->mother_name }}</td>
                </tr>
                <tr>
                    <td>School Name</td>
                    <td>{{ $image->user->detail->school_name }}</td>
                </tr>
                <tr>
                    <td>Class Name</td>
                    <td>{{ $image->user->detail->class_name }}</td>
                </tr>
                <tr class="uk-margin">
                    <td>Email</td>
                    <td>{{ $image->user->email }}</td>
                </tr>
                <tr>
                    <td colspan="2" class="uk-text-right">
                        <a class="uk-button uk-button-primary twb-round green" href="{{ action('CoinController@coinImages') }}">BACK</a>
                        @if ($image->status == 0 && userCan('coins'))
                        <a class="uk-button uk-button-primary twb-round green"
                           href="{{ action('CoinController@updateStatus', ['id' => $image->id, 'status' => 1]) }}">APPROVE</a>
                        @endif

                        @if ($image->status == 1 && userCan('coins'))
                        <a class="uk-button uk-button-primary twb-round red"
                           href="{{ action('CoinController@updateStatus', ['id' => $image->id, 'status' => 0]) }}">OPEN</a>
                        @endif
                    </td>
                </tr>
            </table>
            {{--</form>--}}
        </div>
    </div>

@endsection

@section('page-level-scripts')

<script type="text/javascript">

</script>
@endsection
