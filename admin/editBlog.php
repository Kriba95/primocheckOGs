<?php 
  session_start(); 
  $username = $_SESSION["username"];
  if ($username == "admin") { //Jos käyttäjä on admin pääsee sivulle

    if (!isset($_SESSION['username'])) {
        $_SESSION['msg'] = "You must log in first";
        header('location: kirjaudu_error.php');
    }
    if (isset($_GET['logout'])) {
        session_destroy();
        unset($_SESSION['username']);
        header("location: kirjaudu_error.php");
    } 

} else header("location: kirjaudu_error.php"); //Muuten tulee kirjaudu error
?>
<script src="../js/jquery.js"></script>
<link href="../css/summernote-lite.min.css" rel="stylesheet">
<script src="../js/summernote-lite.min.js"></script>
<?php
    include_once('header.php');
    include ('../backend/functions.php');

?>
<div class="container">
    <p style="display:inline;">    
        <fieldset>
            <br> 
            <form name="editPoll"> 
        <h1>Edit blog</h1>
        <b><span>edit:</span></b> 
        <span id="edit"></span>

        <textarea id="summernote" name="message">
        <?php  populateBlogSummernote() ?>
        </textarea>
        
</fieldset>
</form>
    </div>
</div>





<script>

    $('#summernote').summernote({
    toolbar: [
        ['style', ['style']],
        ['font', ['bold', 'italic', 'underline', 'clear']],
        // ['font', ['bold', 'italic', 'underline', 'strikethrough', 'superscript', 'subscript', 'clear']],
        ['fontname', ['fontname']],
        ['fontsize', ['fontsize']],
        ['color', ['color']],
        ['para', ['ul', 'ol', 'paragraph']],
        ['height', ['height']],
        ['table', ['table']],
        ['insert', ['link', 'picture', 'hr']],
        ['view', ['fullscreen'/*, 'codeview' */]],   // remove codeview button 
        ['help', ['help']]
      ],

        callbacks: {
            onImageUpload: function(files) {
                for(let i=0; i < files.length; i++) {
                    $.upload(files[i]);
                }
            }
        },
        height: 500,
        
    });

    $.upload = function (file) {
        let out = new FormData();
        out.append('file', file, file.name);

        $.ajax({
            method: 'POST',
            url: '../backend/upload.php',
            contentType: false,
            cache: false,
            processData: false,
            data: out,
            success: function (img) {
                $('#summernote').summernote('insertImage', img);
            },
            error: function (jqXHR, textStatus, errorThrown) {
                console.error(textStatus + " " + errorThrown);
            }
        });
    };
</script>


<?php 
    include_once('footer.php');
?>
