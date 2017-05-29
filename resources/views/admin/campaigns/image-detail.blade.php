@extends('admin.layouts.default')

@section('page-level-styles')
@endsection

@section('content')

    <h3>
        @if(isset($pageTitle)) {!! $pageTitle !!}@endif
    </h3>
    <div class="uk-grid-medium uk-child-width-1-1@s uk-child-width-1-2@m" uk-grid>
        <div>
            <img src="http://twb.dev/uploads/coloring-images/dsc00104.jpg" >
        </div>
        <div>
            <table class="uk-table uk-width-1-1">
                <tr>
                    <td width="25%">Judul</td>
                    <td>"Menunggu Lebaran"</td>
                </tr>
                <tr>
                    <td>Nama</td>
                    <td>Donald Trump</td>
                </tr>
                <tr>
                    <td>Tanggal Lahir</td>
                    <td>01/01/2001</td>
                </tr>
                <tr>
                    <td>Alamat</td>
                    <td>Jl. Setapak 13</td>
                </tr>
                <tr>
                    <td>Kota</td>
                    <td>Bandung</td>
                </tr>
                <tr class="uk-margin">
                    <td>Email</td>
                    <td>alamat@email.com</td>
                </tr>
                <tr>
                    <td colspan="2" class="uk-text-right"><button class="uk-button uk-button-primary twb-round green" title="Daftar" type="submit">APPROVE</button></td>
                </tr>
            </table>
        </div>
    </div>

@endsection

@section('page-level-scripts')

<script type="text/javascript">

</script>
@endsection
