§
<?php 
    include_once('header.php');
?>









<div class="container">





<?php
// connect to database
$con = mysqli_connect('localhost','root','');
mysqli_select_db($con, 'python');



// define how many results you want per page
$results_per_page = 5;

// find out the number of results stored in database
$sql='SELECT * FROM dbdata';
$result = mysqli_query($con, $sql);
$number_of_results = mysqli_num_rows($result);

// determine number of total pages available
$number_of_pages = ceil($number_of_results/$results_per_page);

// determine which page number visitor is currently on
if (!isset($_GET['page'])) {
  $page = 1;
} else {
  $page = $_GET['page'];
}

// determine the sql LIMIT starting number for the results on the displaying page
$this_page_first_result = ($page-1)*$results_per_page;

// retrieve selected results from database and display them on page
$sql='SELECT * FROM dbdata LIMIT ' . $this_page_first_result . ',' .  $results_per_page;
$result = mysqli_query($con, $sql);



while ($row = mysqli_fetch_array($result)) {
    $postUrl = preg_replace('/\s+/', '_', $row['otsikkos']);

    echo 
    '<div class="post">' . '<a class="post_title" href="posts.php?content=' . $postUrl . '_' . $row['otsikkos'] . '_' . $row['milloins']  . '">' . $row['otsikkos'] . '</a>' . '<p class="post_content">' . substr($row['kuvauss'], 0, 950) . '<p>Lue lisää...</p>' . '</p>' .  '</div>';
}



// Näyttää linkit
for ($page=1;$page<=$number_of_pages;$page++) {
  echo '<a class="pagenation" href="index.php?page=' . $page . '">' . $page . '</a> ';
}

?>

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
            url: 'upload.php',
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
