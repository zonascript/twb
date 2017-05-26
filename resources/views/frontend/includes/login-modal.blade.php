<div id="login-modal" class="uk-modal">
    <div class="uk-modal-dialog">
        <a class="uk-modal-close uk-close"></a>
        <div class="uk-modal-header uk-padding-small twb-popimg twb-blue"><h5 class="uk-modal-title white-text twb-pop-title">LOGIN</h5></div>
        <div class="uk-padding-small">Anda harus login untuk mengupload hasil mewarnai Anda.</div>
        <form action="#" id="login-form" class="uk-padding-small">
            {!! csrf_field() !!}
            <div class="uk-margin-small-bottom">
                <label class="uk-form-label" for="judul">Email *</label>
                <div class="uk-form-controls">
                    <input class="uk-input uk-form-small twb-round" name="email" id="email" type="email" placeholder="">
                </div>
            </div>
            <div class="uk-margin">
                <label class="uk-form-label" for="judul">Password *</label>
                <div class="uk-form-controls">
                    <input class="uk-input uk-form-small twb-round" name="password" id="password" type="password" placeholder="">
                </div>
            </div>
            <div class="uk-flex uk-flex-middle uk-flex-between">
                <div class="uk-inline">Belum terdaftar? <a class="notmember uk-modal-close uk-text-bold red-text" title="Register Now">Daftar Sekarang!</a></div>
                <button class="uk-button uk-button-small uk-button-primary twb-round green btn-login" title="LOGIN" type="button">LOGIN</button>
            </div>
        </form>
    </div>
</div>