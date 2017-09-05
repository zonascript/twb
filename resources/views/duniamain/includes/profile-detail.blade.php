<div id="register-modal" class="uk-modal">
    <div class="uk-modal-dialog">
        <a class="uk-modal-close-outside" title="Close" uk-close></a>
        <div class="uk-modal-header uk-padding-small twb-popimg twb-blue"><h5 class="uk-modal-title white-text twb-pop-title">Lengkapi Data</h5></div>
        <form action="{!! url('dunia-main/complete-profile/' . (isset($loggedInUser->id) ? $loggedInUser->id : '')) !!}" id="register-form" class="uk-padding-small">
            <div class="uk-margin-small-bottom form-group" id="reg-errors"></div>
            {!! csrf_field() !!}
            <div class="uk-margin" uk-overflow-auto>
                <div class="uk-margin-small-bottom">
                    <label class="uk-form-label" for="kota">Nama Ibu *</label>
                    <div class="uk-form-controls">
                        <input class="uk-input uk-form-small twb-round" id="mother_name" type="text" placeholder="" name="mother_name"
                        @if(isset($loggedInUser->detail->mother_name)) value="{!! $loggedInUser->detail->mother_name !!}" @endif>
                    </div>
                </div>
                <div class="uk-margin-small-bottom">
                    <label class="uk-form-label" for="lahir">Tanggal Lahir *</label>
                    <div class="uk-form-controls">
                        <input class="uk-input uk-form-small twb-round" id="reg_birthdate" type="text" name="birthdate" >
                    </div>
                </div>
                <div class="uk-margin-small-bottom">
                    <label class="uk-form-label" for="kota">Sekolah</label>
                    <div class="uk-form-controls">
                        <input class="uk-input uk-form-small twb-round" id="school_name" type="text" placeholder="" name="school_name"
                        @if(isset($loggedInUser->detail->school_name)) value="{!! $loggedInUser->detail->school_name !!}" @endif>
                    </div>
                </div>
                <div class="uk-margin-small-bottom">
                    <label class="uk-form-label" for="kota">Kelas</label>
                    <div class="uk-form-controls">
                        <input class="uk-input uk-form-small twb-round" id="class_name" type="text" placeholder="" name="class_name"
                        @if(isset($loggedInUser->detail->class_name)) value="{!! $loggedInUser->detail->class_name !!}" @endif>
                    </div>
                </div>
                <div class="uk-margin-small-bottom">
                    <label class="uk-form-label" for="alamat">Alamat</label>
                    <textarea class="uk-textarea uk-form-small twb-round" id="reg_address" name="address">@if(isset($loggedInUser->detail->class_name)){!! $loggedInUser->detail->address !!}@endif</textarea>
                </div>
            </div>
            <div class="uk-flex uk-flex-middle uk-flex-between">
                <span class="red-text">*) Wajib diisi</span>
                <button class="uk-button uk-button-small uk-button-primary twb-round green btn-register" data-type="login" title="Daftar" type="submit">Update Profile</button>
            </div>
        </form>
    </div>
</div>
