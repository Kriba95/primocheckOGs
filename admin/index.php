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

<?php 
    include_once('header.php');
?>


<div class="container">
<div class="row">                 
       
    </div>
</div>    

<td>
                        </td>
                        <td>
                        </td>
  
                        <td>
                   
                        </td>
                    </tr>
<div class="section-container">
    <div class="container">
        <div class="row">
            <div class="col-">
            <h2>Posts</h2>
                <button class="btn btn-info"onclick="showPost(data,'approved')">Waiting for approvement</button>
                <button class="btn btn-info" onclick="showPost(data,'notPublished')">Not published</button>
                <button class="btn btn-info" onclick="showPost(data,'rejected')">Rejected</button>
                <button class="btn btn-info" onclick="showPost(data,'published')">Published</button>         

                <ul id="votesUl" class="list-group">
                </ul>
            </div> 
        </div>
    </div>
</div>



<script src="../js/topicsAdmin.js"></script>

<?php 
    include_once('footer.php');
?>

