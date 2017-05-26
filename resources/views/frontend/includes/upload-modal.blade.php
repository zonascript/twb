<div id="upload-modal" class="uk-modal">
    <div class="uk-modal-dialog">
        <button class="uk-modal-close-outside" type="button" uk-close></button>
        <div class="uk-modal-header uk-padding-small twb-popimg twb-blue"><h5 class="uk-modal-title white-text twb-pop-title">MENGUNGGAH HASIL MEWARNAI</h5></div>
        <form class="uk-grid-collapse uk-grid-match" action="" uk-grid>
            <div class="uk-width-1-2">
                <div class="twb-pop-left uk-padding-small">
                    <div class="uk-margin-small-bottom">
                        <label class="uk-form-label" for="judul">Judul Karya *</label>
                        <div class="uk-form-controls">
                            <textarea class="uk-textarea uk-form-small twb-round" id="judul"></textarea>
                        </div>
                    </div>
                </div>
            </div>
            <div class="uk-width-1-2">
            <div class="twb-pop-right uk-padding-small">
                <div class="uk-margin-small-bottom">
                    {{-- <div uk-form-custom="target: true">
                        <input type="file" name="file" id="file">
                        <input class="uk-input uk-form-width-medium" type="text" placeholder="Select file" disabled>
                    </div> --}}
                    <div class="twb-upload uk-placeholder uk-text-center">
                        <span uk-icon="icon: cloud-upload"></span>
                        <span class="uk-text-middle">Drop gambar ke sini, atau</span>
                        <div uk-form-custom>
                            <input type="file" name="file" id="file">
                            <span class="uk-button uk-button-default uk-button-small uk-margin-small-top">klik di sini</span>
                        </div>
                    </div>
                    <progress id="progressbar" class="uk-progress" value="0" max="100" hidden></progress>
                    <div id="image-preview" class="uk-margin-small"></div>
                </div>
                <div class="uk-flex uk-flex-middle uk-flex-between">
                    <span class="red-text">*) Wajib diisi</span>
                    <button class="uk-button uk-button-small uk-button-primary twb-round green" title="Upload" type="submit">SELESAI</button>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>
