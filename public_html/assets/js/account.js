function zoomGallery($this) {
    var img = $($this).find('img').prop('src');
    var txt = $($this).closest('div.twb-color').find('h6').text();
    var person = $($this).closest('div.twb-color').find('.person').text();
    var modal = '<button class="uk-modal-close-outside" type="button" uk-close></button>' +
        '<img src="'+img+'" class="twb-popimg">' +
        '<div class="uk-padding-small">' +
        '<h6 class="uk-margin-remove">'+ txt +'</h6>' +
        '<div class="uk-flex uk-flex-middle uk-flex-between">' +
        '<div>'+ person +'</div>' +
        '<ul class="uk-subnav uk-subnav-divider uk-margin-remove">' +
        '<li><a href="" class="uk-text-capitalize" title="Print"><i class="fa fa-print"></i> Print</a></li>' +
        '<li><a href="'+img+'" class="uk-text-capitalize" title="Download" target="_blank"><i class="fa fa-download"></i> Download</a></li>' +
        '</ul>' +
        '</div>' +
        '</div>';
    var uikitModal = UIkit.modal.dialog(modal);
}