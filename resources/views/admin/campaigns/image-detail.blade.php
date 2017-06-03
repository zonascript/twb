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
            <form method="post" action="{{ action('CampaignController@updateStatus', $image->id) }}">
            {{ csrf_field() }}
            <table class="uk-table uk-width-1-1">
                <tr>
                    <td width="25%">Judul</td>
                    <td>{{ $image->title }}</td>
                </tr>
                <tr>
                    <td>Nama</td>
                    <td>{{ $image->user_name }}</td>
                </tr>
                <tr>
                    <td>Tanggal Lahir</td>
                    <td>{{ changeDateFormat($image->user_birthdate, 'Y-m-d', 'd F Y') }} ({{ getAge($image->user_birthdate) }})</td>
                </tr>
                <tr>
                    <td>Alamat</td>
                    <td>{{ $image->user_address }}</td>
                </tr>
                <tr>
                    <td>Kota</td>
                    <td>{{ $image->user_city }}</td>
                </tr>
                <tr class="uk-margin">
                    <td>Email</td>
                    <td>{{ $image->user_email }}</td>
                </tr>
                <tr>
                    <td colspan="2" class="uk-text-right">
                        <a class="uk-button uk-button-primary twb-round green" href="{{ action('CampaignController@participantImages') }}">BACK</a>
                        @if ($image->status == 0 && userCan('campaign.approve'))
                        <button class="uk-button uk-button-primary twb-round green" title="Daftar" type="submit">APPROVE</button>
                        @endif
                    </td>
                </tr>
            </table>
            </form>
        </div>
    </div>

@endsection

@section('page-level-scripts')

<script type="text/javascript">

</script>
@endsection
