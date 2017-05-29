<form class="uk-form-horizontal">
    <div class="uk-margin-small-bottom">
        <label class="uk-form-label" for="nama">Nama</label>
        <div class="uk-form-controls">
            <input class="uk-input uk-form-blank uk-form-small twb-round" id="nama" type="text" value="{{ $user->name }}">
        </div>
    </div>
    <div class="uk-margin-small-bottom">
        <label class="uk-form-label" for="lahir">Tanggal Lahir</label>
        <div class="uk-form-controls">
            <input class="uk-input uk-form-blank uk-form-small twb-round" id="lahir" type="text" value="{{ changeDateFormat($user->detail->birth_date, 'Y-m-d', 'd F Y') }}">
        </div>
    </div>
    <div class="uk-margin-small-bottom">
        <label class="uk-form-label" for="alamat">Alamat</label>
        <div class="uk-form-controls">
            <textarea class="uk-textarea uk-form-blank uk-form-small twb-round" id="alamat">{{ $user->detail->address }}</textarea>
        </div>
    </div>
    <div class="uk-margin-small-bottom">
        <label class="uk-form-label" for="kota">Kota</label>
        <div class="uk-form-controls">
            <input class="uk-input uk-form-blank uk-form-small twb-round" id="kota" type="text" value="{{ $user->detail->city }}">
        </div>
    </div>
    <div class="uk-margin-small-bottom">
        <label class="uk-form-label" for="email">Email</label>
        <div class="uk-form-controls">
            <input class="uk-input uk-form-blank uk-form-small twb-round" id="email" type="email" value="{{ $user->email }}">
        </div>
    </div>
    <div class="uk-flex uk-flex-middle uk-flex-between">
        {{-- <span class="red-text">*) Wajib diisi</span>
        <button class="uk-button uk-button-small uk-button-primary twb-round green" title="Daftar" type="submit">DAFTAR</button> --}}
    </div>
</form>