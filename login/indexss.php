<html lang="en"><!DOCTYPE html>
<html>
<head>
<script src="../js/jquery.js"></script>

    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.js"></script>
</head>
<body>
<div class="container">
<form>

<textarea id="summernote"></textarea>
</form>
</div>


<script>
$('#summernote').summernote({
        onImageUpload: function(files, editor, welEditable) {
            sendFile(files[0], editor, welEditable);
        }
});

// send the file

function sendFile(file, editor, welEditable) {
        data = new FormData();
        data.append("file", file);
        $.ajax({
            data: data,
            type: 'POST',
            xhr: function() {
                var myXhr = $.ajaxSettings.xhr();
                if (myXhr.upload) myXhr.upload.addEventListener('progress',progressHandlingFunction, false);
                return myXhr;
            },
            url: 'db_request.php'
            cache: false,
            contentType: false,
            processData: false,
            success: function(url) {
                editor.insertImage(welEditable, url);
            }
        });
}

// update progress bar

function progressHandlingFunction(e){
    if(e.lengthComputable){
        $('progress').attr({value:e.loaded, max:e.total});
        // reset progress on complete
        if (e.loaded == e.total) {
            $('progress').attr('value','0.0');
        }
    }
}
</script>

</body>
</html>
