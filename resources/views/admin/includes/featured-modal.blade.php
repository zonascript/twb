<div id="featured-image-modal" class="uk-modal-container" uk-modal="center: true">
    <div class="uk-modal-dialog">
        <button class="uk-modal-close-default" type="button" uk-close></button>

        <div class="uk-modal-body featured-image-body">
            <ul class="image-tab" uk-tab="animation: uk-animation-scale-up">
                <li><a href="#">Upload</a></li>
                <li class="uk-active"><a href="#">Select Images</a></li>
            </ul>

            <ul class="uk-switcher uk-margin">
                <li>
                    <button type="button" id="browse">Upload</button>
                </li>
                <li class="uk-grid">
                    <div class="uk-width-2-3">
                        <div class="uk-child-width-1-4@s uk-grid-collapse uk-text-center image-list-container" uk-grid >
                        </div>
                    </div>
                    <div class="uk-width-1-3">
                        <div class="image-view-container">

                        </div>
                        <div class="image-modifier-container">
                            <form class="uk-form uk-form-stacked" action="#">
                                <div class="uk-form-row">
                                    <label class="uk-form-label" for="">Alternative Text</label>
                                    <div class="uk-form-controls">
                                        <input class="uk-input image_alt" name="alt" type="text" />
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
        <div class="uk-modal-footer uk-text-right">
            <button class="uk-button uk-button-default uk-modal-close" type="button">Cancel</button>
            <button class="uk-button uk-button-primary featured-submit" type="button">Submit</button>
        </div>
    </div>
</div>