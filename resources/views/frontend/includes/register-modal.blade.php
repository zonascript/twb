<div id="register-modal" class="uk-modal">
    <div class="uk-modal-dialog">
        <button class="uk-modal-close-outside" type="button" uk-close></button>
        <div class="uk-modal-header uk-padding-small twb-popimg twb-blue"><h5 class="uk-modal-title white-text twb-pop-title">DAFTAR</h5></div>
        <form action="#" id="register-form" class="uk-padding-small">
            <div class="uk-margin-small-bottom form-group" id="reg-errors"></div>
            {!! csrf_field() !!}
            <div class="uk-margin-small-bottom">
                <label class="uk-form-label" for="nama">Nama *</label>
                <div class="uk-form-controls">
                    <input class="uk-input uk-form-small twb-round" id="reg_name" type="text" name="name" placeholder="">
                </div>
            </div>
            <div class="uk-margin-small-bottom">
                <label class="uk-form-label" for="lahir">Tanggal Lahir *</label>
                <div class="uk-form-controls">
                    <input class="uk-input uk-form-small twb-round" id="reg_birthdate" type="text" data-uk-datepicker="{format:'DD/MM/YYYY',maxDate:0,pos:'bottom'}" name="birthdate">
                </div>
            </div>
            <div class="uk-margin-small-bottom">
                <label class="uk-form-label" for="alamat">Alamat *</label>
                <textarea class="uk-textarea uk-form-small twb-round" id="reg_address" name="address"></textarea>
            </div>
            <div class="uk-margin-small-bottom">
                <label class="uk-form-label" for="kota">Kota *</label>
                <div class="uk-form-controls">
                    <input class="uk-input uk-form-small twb-round" id="reg_city" type="text" placeholder="" name="city">
                </div>
            </div>
            <div class="uk-margin-small-bottom">
                <label class="uk-form-label" for="email">Email *</label>
                <div class="uk-form-controls">
                    <input class="uk-input uk-form-small twb-round" id="reg_email" type="email" placeholder="alamat@email.com" name="email">
                </div>
            </div>
            <div class="uk-margin">
                <label class="uk-form-label" for="email">Buat Password *</label>
                <div class="uk-form-controls">
                    <input class="uk-input uk-form-small twb-round" id="reg_password" type="password" placeholder="Password" name="password">
                </div>
            </div>
            <div class="uk-margin">
                <label class="uk-form-label" for="email">Buat Password *</label>
                <div class="uk-form-controls">
                    <input class="uk-input uk-form-small twb-round" id="reg_password_confirmation" type="password" placeholder="Konfirmasi Password" name="password_confirmation">
                </div>
            </div>

            <div class="uk-flex uk-flex-middle uk-flex-between">
                <span class="red-text">*) Wajib diisi</span>
                <button class="uk-button uk-button-small uk-button-primary twb-round green btn-register" title="Daftar" type="button">DAFTAR</button>
            </div>
        </form>
    </div>
</div>
