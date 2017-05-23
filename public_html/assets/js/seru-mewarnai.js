$(document).ready(function() {
    // pop coloring
    $('a.zoom').on('click', function(e) {
        e.preventDefault();
        $(this).blur();
        var img = $(this).closest('div.twb-color-bw').find('img').prop('src');
        var txt = $(this).closest('div.info').find('h6').text();
        var modal = '<button class="uk-modal-close-outside" type="button" uk-close></button>' +
        '<img src="'+img+'" class="twb-popimg">' +
        '<div class="uk-padding-small uk-flex uk-flex-middle uk-flex-between">' +
            '<div>'+ txt +'</div>' +
            '<ul class="uk-subnav uk-subnav-divider uk-margin-remove">' +
                '<li><a href="" class="uk-text-capitalize" title="Print"><i class="fa fa-print"></i> Print</a></li>' +
                '<li><a href="'+img+'" class="uk-text-capitalize" title="Download" target="_blank"><i class="fa fa-download"></i> Download</a></li>' +
            '</ul>' +
        '</div>';
        var uikitModal = UIkit.modal.dialog(modal);
    });
    // pop galeri
    $('a.thumb').on('click', function(e) {
        e.preventDefault();
        $(this).blur();
        var img = $(this).find('img').prop('src');
        var txt = $(this).closest('div.twb-color').find('h6').text();
        var person = $(this).closest('div.twb-color').find('.person').text();
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
    });

    // pop upload
    $('a.upload').on('click', function(e) {
        e.preventDefault();
        $(this).blur();
        var modal = '<button class="uk-modal-close-outside" type="button" uk-close></button>' +
        '<div class="uk-modal-header uk-padding-small twb-popimg twb-blue"><h5 class="uk-modal-title white-text twb-pop-title">MENGUNGGAH HASIL MEWARNAI</h5></div>' +
        '<form class="uk-grid-collapse" action="" uk-grid>' +
            '<div class="uk-width-1-2">' +
                '<div class="twb-pop-left uk-padding-small">' +
                    '<div class="uk-margin-small-bottom">' +
                        '<label class="uk-form-label" for="judul">Judul Karya *</label>' +
                        '<div class="uk-form-controls">' +
                            '<textarea class="uk-textarea uk-form-small twb-round" id="judul"></textarea>' +
                        '</div>' +
                    '</div>' +
                '</div>' +
            '</div>' +
            '<div class="uk-width-1-2">' +
                '<div class="twb-pop-right uk-padding-small">' +
                    '<div class="uk-margin-small-bottom">' +
                        'upload here' +
                    '</div>' +
                    '<div class="uk-flex uk-flex-middle uk-flex-between">' +
                        '<span class="red-text">*) Wajib diisi</span>' +
                        '<button class="uk-button uk-button-small uk-button-primary twb-round green" title="Upload" type="submit">SELESAI</button>' +
                    '</div>' +
                '</div>' +
            '</div>' +
        '</form>';
        var uikitModal = UIkit.modal.dialog(modal);
    });
    // $('a.upload').on('click', function(e) {
    //     e.preventDefault();
    //     $(this).blur();
    //     var modal = '<button class="uk-modal-close-outside" type="button" uk-close></button>' +
    //     '<div class="uk-modal-header uk-padding-small twb-popimg twb-blue"><h5 class="uk-modal-title white-text twb-pop-title">MENGUNGGAH HASIL MEWARNAI</h5></div>' +
    //     '<form class="uk-grid-collapse" action="" uk-grid>' +
    //         '<div class="uk-width-1-2">' +
    //             '<div class="twb-pop-left uk-padding-small">' +
    //                 '<div class="uk-margin-small-bottom">' +
    //                     '<label class="uk-form-label" for="judul">Judul Karya *</label>' +
    //                     '<div class="uk-form-controls">' +
    //                         '<input class="uk-input uk-form-small twb-round" id="judul" type="text" placeholder="">' +
    //                     '</div>' +
    //                 '</div>' +
    //                 '<div class="uk-margin-small-bottom">' +
    //                     '<label class="uk-form-label" for="nama">Nama *</label>' +
    //                     '<div class="uk-form-controls">' +
    //                         '<input class="uk-input uk-form-small twb-round" id="nama" type="text" placeholder="">' +
    //                     '</div>' +
    //                 '</div>' +
    //                 '<div class="uk-margin-small-bottom">' +
    //                     '<label class="uk-form-label" for="lahir">Tanggal Lahir *</label>' +
    //                     '<div class="uk-form-controls">' +
    //                         '<input class="uk-input uk-form-small twb-round" id="lahir" type="text" placeholder="DD/MM/YYYY">' +
    //                     '</div>' +
    //                 '</div>' +
    //                 '<div class="uk-margin-small-bottom">' +
    //                     '<label class="uk-form-label" for="alamat">Alamat *</label>' +
    //                     '<textarea class="uk-textarea uk-form-small twb-round" id="alamat"></textarea>' +
    //                 '</div>' +
    //                 '<div class="uk-margin-small-bottom">' +
    //                     '<label class="uk-form-label" for="kota">Kota *</label>' +
    //                     '<div class="uk-form-controls">' +
    //                         '<input class="uk-input uk-form-small twb-round" id="kota" type="text" placeholder="">' +
    //                     '</div>' +
    //                 '</div>' +
    //                 '<div class="">' +
    //                     '<label class="uk-form-label" for="email">Email *</label>' +
    //                     '<div class="uk-form-controls">' +
    //                         '<input class="uk-input uk-form-small twb-round" id="email" type="email" placeholder="alamat@email.com">' +
    //                     '</div>' +
    //                 '</div>' +
    //             '</div>' +
    //         '</div>' +
    //         '<div class="uk-width-1-2">' +
    //             '<div class="twb-pop-right uk-padding-small">' +
    //                 '<div class="uk-margin-small-bottom">' +
    //                     'upload here' +
    //                 '</div>' +
    //                 '<div class="uk-flex uk-flex-middle uk-flex-between">' +
    //                     '<span class="red-text">*) Wajib diisi</span>' +
    //                     '<button class="uk-button uk-button-small uk-button-primary twb-round green" title="Upload" type="submit">SELESAI</button>' +
    //                 '</div>' +
    //             '</div>' +
    //         '</div>' +
    //     '</form>';
    //     var uikitModal = UIkit.modal.dialog(modal);
    // });

    // pop login
    $('a.login').on('click', function(e) {
        e.preventDefault();
        $(this).blur();
        var modal = '<button class="uk-modal-close-outside" type="button" uk-close></button>' +
        '<div class="uk-modal-header uk-padding-small twb-popimg twb-blue"><h5 class="uk-modal-title white-text twb-pop-title">LOGIN</h5></div>' +
        '<form action="" class="uk-padding-small">' +
            '<div class="uk-margin-small-bottom">' +
                '<label class="uk-form-label" for="judul">Email *</label>' +
                '<div class="uk-form-controls">' +
                    '<input class="uk-input uk-form-small twb-round" id="email" type="email" placeholder="">' +
                '</div>' +
            '</div>' +
            '<div class="uk-margin">' +
                '<label class="uk-form-label" for="judul">Password *</label>' +
                '<div class="uk-form-controls">' +
                    '<input class="uk-input uk-form-small twb-round" id="password" type="password" placeholder="">' +
                '</div>' +
            '</div>' +
            '<div class="uk-flex uk-flex-middle uk-flex-between">' +
                '<div class="uk-inline">Belum terdaftar? <a class="notmember uk-modal-close uk-text-bold red-text" title="Register Now">Daftar Sekarang!</a></div>' +
                '<button class="uk-button uk-button-small uk-button-primary twb-round green" title="LOGIN" type="submit">LOGIN</button>' +
            '</div>' +
        '</form>';
        var uikitModal = UIkit.modal.dialog(modal);

        $('a.notmember').on('click', function(e) {
            // $('a.register').click();
            register();
        });
    });

    // pop register
    function register() {
        // e.preventDefault();
        $(this).blur();
        var modal = '<button class="uk-modal-close-outside" type="button" uk-close></button>' +
        '<div class="uk-modal-header uk-padding-small twb-popimg twb-blue"><h5 class="uk-modal-title white-text twb-pop-title">DAFTAR</h5></div>' +
        '<form action="" class="uk-padding-small">' +
            '<div class="uk-margin-small-bottom">' +
                '<label class="uk-form-label" for="nama">Nama *</label>' +
                '<div class="uk-form-controls">' +
                    '<input class="uk-input uk-form-small twb-round" id="nama" type="text" placeholder="">' +
                '</div>' +
            '</div>' +
            '<div class="uk-margin-small-bottom">' +
                '<label class="uk-form-label" for="lahir">Tanggal Lahir *</label>' +
                '<div class="uk-form-controls">' +
                    '<input class="uk-input uk-form-small twb-round" id="lahir" type="text" placeholder="DD/MM/YYYY">' +
                '</div>' +
            '</div>' +
            '<div class="uk-margin-small-bottom">' +
                '<label class="uk-form-label" for="alamat">Alamat *</label>' +
                '<textarea class="uk-textarea uk-form-small twb-round" id="alamat"></textarea>' +
            '</div>' +
            '<div class="uk-margin-small-bottom">' +
                '<label class="uk-form-label" for="kota">Kota *</label>' +
                '<div class="uk-form-controls">' +
                    '<input class="uk-input uk-form-small twb-round" id="kota" type="text" placeholder="">' +
                '</div>' +
            '</div>' +
            '<div class="uk-margin-small-bottom">' +
                '<label class="uk-form-label" for="email">Email *</label>' +
                '<div class="uk-form-controls">' +
                    '<input class="uk-input uk-form-small twb-round" id="email" type="email" placeholder="alamat@email.com">' +
                '</div>' +
            '</div>' +
            '<div class="uk-margin">' +
                '<label class="uk-form-label" for="email">Buat Password *</label>' +
                '<div class="uk-form-controls">' +
                    '<input class="uk-input uk-form-small twb-round" id="password" type="password" placeholder="password">' +
                '</div>' +
            '</div>' +
            '<div class="uk-flex uk-flex-middle uk-flex-between">' +
                '<span class="red-text">*) Wajib diisi</span>' +
                '<button class="uk-button uk-button-small uk-button-primary twb-round green" title="Daftar" type="submit">DAFTAR</button>' +
            '</div>' +
        '</form>';
        var uikitModal = UIkit.modal.dialog(modal);
    };
});
