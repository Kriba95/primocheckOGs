<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta content="IE=edge" http-equiv="X-UA-Compatible">
  <meta content="width=device-width,initial-scale=1" name="viewport">
  <meta content="description" name="description">
  <meta name="google" content="notranslate" />
  <meta name="msapplication-tap-highlight" content="no">
  <link href="./assets/apple-touch-icon.png" rel="apple-touch-icon">
  <title>Admin View | vieraslista</title>  
  <link href="../css/main.css" rel="stylesheet">
  <link href="../css/animate.compat.css" rel="stylesheet">
</head>
<body> 
<header>

<div class="animate__slideOutLeft topnav" style="margin-top: -80px; background-color: rgb(162 9 9 / 79%);" id="myTopnav">
  <a style="background-image: linear-gradient(to right, rgb(162 9 9 / 0%) 0%, #000000 100%);" href="index.php?logout='1'" class="active">Logout</a>
  <a href="index.php?logout='1'" class="bactive"> <?php  if (isset($_SESSION['username'])) : ?>Logged as, <strong><?php echo $_SESSION['username']; ?></strong><?php endif ?></a>
    <div class="container">
      <div style="float: left;">
        <a> </a>
        <a href="./index.php">Index</a>
        <a href="editBlog.php">editBlog</a>
        <a href="../login/index.php">Back to Normal Page</a>

        <a href="javascript:void(0);" class="icon" onclick="myFunction()">
          <i class="fa fa-bars"></i>
        </a>
      </div>
    </div>
</div>
<script>
  function myFunction() {
    var x = document.getElementById("myTopnav");
    if (x.className === "topnav") {
      x.className += " responsive";
    } else {
      x.className = "topnav";
    }
  }
</script>

</header>