tinymce.PluginManager.add('kleurimage', function(editor, url) {
    // Add a button that opens a window
    editor.addButton('kleurimage', {
        text: 'Add Image',
        icon: false,
        onclick: function() {
            // Open window
            var baseUrl = editor.getParam("baseUrl");
            editor.windowManager.open({
                    title: 'Form',
                    url: baseUrl + '/form',
                    width : 800,
                    height : 600
                },
                {
                    jquery: $
                });
        }
    });
});
