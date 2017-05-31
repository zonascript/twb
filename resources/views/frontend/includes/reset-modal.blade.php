<div id="reset-modal" class="uk-modal">
    <div class="uk-modal-dialog">
        <a class="uk-modal-close-outside" uk-close></a>
        <div class="uk-modal-header uk-padding-small twb-popimg twb-blue"><h5 class="uk-modal-title white-text twb-pop-title">RESET PASSWORD</h5></div>
        <form action="#" id="reset-form" class="uk-padding-small">
            <div id="reset-errors"></div>
            {!! csrf_field() !!}
            <div class="uk-margin-small-bottom">
                <label class="uk-form-label" for="judul">Email *</label>
                <div class="uk-form-controls">
                    <input class="uk-input uk-form-small twb-round" name="email" id="reset_email" type="text" placeholder="" required>
                </div>
            </div>
            <div class="uk-flex uk-flex-middle uk-flex-right">
                <button class="uk-button uk-button-small uk-button-primary twb-round green btn-reset" title="Reset Password" type="submit">RESET PASSWORD</button>
            </div>
        </form>
    </div>
</div>
