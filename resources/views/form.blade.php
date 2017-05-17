<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="{!! asset('assets/css/uikit.min.css') !!}" />
    <script src="https://code.jquery.com/jquery-3.2.1.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous"></script>

</head>
<body>
<div >
    <div >
        <ul uk-tab>
            <li><a href="#">Upload</a></li>
            <li><a href="#">Select Images</a></li>
        </ul>

        <ul class="uk-switcher uk-margin">
            <li>
                <button type="button">Upload</button>
            </li>
            <li>
                <div class="uk-grid-small uk-child-width-1-4@s uk-flex-center uk-text-center" uk-grid>
                    <div>
                        <div class="uk-card uk-card-default uk-card-body">Item 1</div>
                    </div>
                    <div class="uk-flex-last">
                        <div class="uk-card uk-card-secondary uk-card-body">Item 2</div>
                    </div>
                    <div>
                        <div class="uk-card uk-card-default uk-card-body">Item 3</div>
                    </div>
                    <div>
                        <div class="uk-card uk-card-default uk-card-body">Item 4</div>
                    </div>
                    <div class="uk-flex-first">
                        <div class="uk-card uk-card-primary uk-card-body">Item 5</div>
                    </div>
                    <div>
                        <div class="uk-card uk-card-default uk-card-body">Item 6</div>
                    </div>
                </div>
            </li>
        </ul>

        <button type="button" class="uk-button" id="submitButton">Submit</button>

    </div>
</div>
<script src="{!! asset('assets/js/uikit.min.js') !!}"></script>
<script type="text/javascript">
    jQuery('#submitButton').on('click', function(e) {
        var fileURL = '{!! asset('images/sample-content/color-1.jpg') !!}';
        var content = "<img src='"+fileURL+"' />";
        console.log(content);
        top.tinymce.activeEditor.insertContent(content);
        top.tinymce.activeEditor.windowManager.close();
    });
</script>
</body>
</html>