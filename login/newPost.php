
<script src="../js/jquery.js"></script>
    <link href="../css/summernote-lite.min.css" rel="stylesheet">
    <script src="../js/summernote-lite.min.js"></script>

<?php 
  session_start(); 


  if (!isset($_SESSION['username'])) {
  	$_SESSION['msg'] = "You must log in first";
  	header('location: kirjaudu_error.php');
  }
  if (isset($_GET['logout'])) {
  	session_destroy();
  	unset($_SESSION['username']);
  	header("location: kirjaudu_error.php");
  }
?>

<?php 
    include_once('header.php');
?>


<div class="section-container">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-md-6">

            <form method="post" action="../backend/save.php" enctype="multipart/form-data">
                <p>Title</p>

                <input id="title" name="title" style="width: 100%; float: left;" class="inputgroup" placeholder="Title"></input>
                
                <br>
                <hr>
                <p>Header Image</p>
                <input type="file" name="fileToUpload" id="fileToUpload">
                <hr>
                <p>Content</p>
                <textarea id="summernote" name="message"></textarea>
                <hr>
                <button type="submit" class="btn btn-primary" name="submit">Save</button>
                
            </form>





            </div>
            <div class="col-xs-12 col-md-6">
                <h4>Guestbook</h4>
                <ul id="guestUl"class="list-group"></ul>
                <form name="guest">
                    <fieldset>
                        <input id="viesti" style="width: 100%; float: left;" class="inputgroup" type="text" name="viesti" placeholder="Type something...">
                        <button style="float: right;" type="submit" class="btn btn-primary" name="komment">Send</button>
                    </fieldset>
                </form>
            </div>
        </div>
    </div>
</div>




<//script onload=showKomments() src="../js/guest.js"><//script>

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

<script src="summernote-cleaner.js"></script>

<?php 
    include_once('footer.php');
?>
