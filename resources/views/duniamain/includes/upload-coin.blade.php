<div id="upload-coin-modal" class="uk-modal">
    <div class="uk-modal-dialog uk-position-relative">
        <a class="uk-modal-close uk-position-top-right uk-margin-small-top uk-margin-small-right" uk-close></a>
        <div class="uk-modal-header uk-padding-small twb-popimg twb-blue"><h5 class="uk-modal-title white-text twb-pop-title">MENGUNGGAH HASIL MEWARNAI</h5></div>
        <form class="" method="post" action="{!! route('ajaxCoinUpload') !!}" enctype="multipart/form-data" id="upload-form">
            {!! csrf_field() !!}
            <div class="twb-pop-left uk-padding-small">
                <div id="upload-errors" class="uk-margin-small-bottom"></div>
                <div class="uk-margin-small-bottom">
                    <label class="uk-form-label" for="judul">Unggah File *</label>
                    <div class="uk-form-controls">
                        <div uk-form-custom="target: true" class="uk-width-1-1">
                            <input type="file" name="file" id="file">
                            <input class="uk-input uk-width-1-1" type="text" placeholder="Pilih file" disabled>
                            <div id="image-preview" class="uk-width-1-1 uk-placeholder uk-text-center uk-padding-small"></div>
                        </div>
                    </div>
                </div>
                <div class="uk-margin-small-bottom">
                    <label class="uk-form-label" for="judul">Score *</label>
                    <div class="uk-form-controls">
                        <input type="text" name="score" id="score" class="uk-input"/>
                        <input type="hidden" name="coin_type" id="coin_type">
                    </div>
                </div>
                <div class="uk-flex uk-flex-middle uk-flex-between">
                    <span class="red-text">*) Wajib diisi</span>
                    <button class="uk-button uk-button-small uk-button-primary twb-round green upload-image" title="Upload" type="submit">SELESAI</button>
                </div>
            </div>
        </form>
        </div>
    </div>
</div>
