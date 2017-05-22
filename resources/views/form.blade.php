<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="{!! asset('assets/css/uikit.min.css') !!}" />
    <script src="https://code.jquery.com/jquery-3.2.1.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous"></script>
</head>
<body>
    <form class="uk-form" action="#">
        <div class="uk-card-body uk-card-small uk-height-large">
            <ul class="image-tab" uk-tab="animation: uk-animation-fade">
                <li><a href="#">Upload</a></li>
                <li class="uk-active"><a href="#">Select Images</a></li>
            </ul>

            <ul class="uk-switcher uk-margin">
                <li>
                    <button type="button" id="browse">Upload</button>
                </li>
                <li class="uk-grid">
                    <div class="uk-width-2-3">
                        <div class="uk-overflow-auto">
                            <div class="uk-child-width-1-4 uk-grid-small uk-text-center image-list-container" uk-grid ></div>
                        </div>
                    </div>
                    <div class="uk-width-1-3">
                        <div class="image-view-container uk-margin">

                        </div>
                        <div class="image-modifier-container">
                            <div class="uk-form-row">
                                <label class="uk-form-label" for="">Alternative Text</label>
                                <input class="uk-input image_alt" name="alt" type="text" />
                            </div>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
        <div class="uk-modal-footer uk-text-right uk-position-bottom">
            <button class="uk-button uk-button-primary" type="button" id="submitButton">Submit</button>
        </div>
    </form>
<script src="{!! asset('assets/js/uikit.min.js') !!}"></script>
<script src="{!! asset('assets/js/plupload/plupload.full.min.js') !!}"></script>
<script type="text/javascript">
    var $baseUrl = '{!! url('/') !!}';
    var $token = '{!! csrf_token() !!}';

    var uploader = new plupload.Uploader({
        browse_button : document.getElementById('browse'), // you can pass in id...
        //container: document.getElementById('tab_images_uploader_container'), // ... or DOM Element itself
        url: $baseUrl + '/upload-image-handler',
        headers: {
            'X-CSRF-TOKEN': '{!! csrf_token() !!}'
        },
        init: {
            PostInit: function() {
                $('.image-modifier-container').hide();
            },

            FilesAdded: function(up, files) {
                up.start();
            },

            UploadProgress: function(up, file) {
                $('#uploaded_file_' + file.id + ' > .status').html(file.percent + '%');
            },

            FileUploaded: function(up, file, response) {
                var response = $.parseJSON(response.response);
                if (response.result.status && response.result.status == 'OK') {
                    $imagePath = response.result.filePath;
                    viewImage(response, $imagePath);
                    reloadImageList();
                    UIkit.switcher('.image-tab').show(1);
                } else {
                    // set failed upload
                    // $('#uploaded_file_' + file.id + ' > .status').removeClass("label-info").addClass("label-danger").html('<i class="fa fa-warning"></i> Failed');
                    // App.alert({type: 'danger', message: 'One of uploads failed. Please retry.', closeInSeconds: 10, icon: 'warning'});
                }
            },

            Error: function(up, err) {
//                App.alert({type: 'danger', message: err.message, closeInSeconds: 10, icon: 'warning'});
            }
        }
    });

    var reloadImageList = function() {
        $.ajax({
            method: "POST",
            url: $baseUrl + '/' + 'get-images-for-uploader',
            data: { _token: $token }
        })
        .done(function( res ) {
            var $result = $.parseJSON(res);
            if ($result.length > 0) {
                var $images = '';
                var i = 0;
                for(i; i<$result.length; i++) {
                    $imgPath = $result[i].path;
                    $imgDesc = $result[i].description;
                    $imgId = $result[i].id;
                    $images += '<div> \
                        <img src="'+$baseUrl+'/image/medium/'+$imgPath+'" class="uk-padding-small" \
                         data-img-path="'+$imgPath+'" data-img-desc="'+$imgDesc+'" data-img-id="'+$imgId+'" \
                         onclick="viewImage(this, \'\')" /> \
                        </div>'
                }
                $('.image-list-container').empty();
                $('.image-list-container').append($images);
            }
        });
    }

    function viewImage($this, $imagePath) {
        if ($imagePath != '') {
            $imageUrl = $baseUrl + '/image/featured/' + $imagePath;
        } else {
            $imgPath = $($this).attr('data-img-path');
            $imageUrl = $baseUrl + '/image/featured/' + $imgPath;
        }
        $imageViewer = '<img src="'+$imageUrl+'" />';
        $('.image-view-container').empty();
        $('.image-view-container').append($imageViewer);
        $('.image-modifier-container').show();
    }

    $(document).ready(function() {
        uploader.init();
        reloadImageList();
        jQuery('#submitButton').on('click', function(e) {
            let imageUrl = $('.image-view-container > img').attr('src');
            let altText = $('.image_alt').val();
            let content = '<img style="margin: 5px;" src="'+imageUrl+'" alt="'+altText+'" />';
            top.tinymce.activeEditor.insertContent(content);
            top.tinymce.activeEditor.windowManager.close();
        });
    });
</script>
</body>
</html>
