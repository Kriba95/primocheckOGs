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
?>


<?php 
if (!isset($_GET['content'])){
  header('');
}

$id = intval($_GET['content']);
include ('../backend/functions.php');


?>


<div class="container">
    <p style="display:inline;">    
        <fieldset>
            <br> 
            <form name="editPost">
            <b><span>Title:</span></b> 

            <input type="text" name="title" id="title" style="width: 100%"></input>
            
            <br>

            <b><span>Author:</span></b> 
                <span id="author"></span>
                <br>
            <b><span>Client wants to:</span></b> 
            <span id="approved"></span>
                <label for="approved"></label>
                <select name="approved" id="approved">
                    
                    <option value="3">Accept</option>
                    <option value="1">Wait</option>
                    <option value="0">Deny</option>
                    <option value="2">Ban</option>

                </select><br>

            <b><span>Published:</span></b> 
                <span id="published"></span>
                <label for="published"></label>
                <select name="published" id="published">
                    <option value="1">Yes</option>
                    <option value="0">No</option>
                </select>
            
            <b><span>Date:</span></b> 
                <span id="timestamp"></span>
                <br>


            <span id="reason"></span>
            <div id="backUp"></div>


            <textarea id="summernote" name="message">
                <?php populateSummernote(); ?>
            </textarea>
            <br>
                <b><span>Reason notify:</span></b> 
                <input type="text" name="reason" id="reasonNotify" style="width: 100%"></input>
            <br>




            <div class="inputgroup">
                <input onclick="modifyPost()" id="sendt" type="button" class="btn btn-primary" value="Jatka"></input>
            </div>



            </form>
        </fieldset> 
   
    </p>
</div>



<section Poll>
    <div class="container">


    </div>
</section Poll>


<script src="../js/editPost.js"></script>
<!-- <script src="../js/postGet.js"></script> -->


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

