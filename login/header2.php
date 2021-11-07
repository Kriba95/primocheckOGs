<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta content="IE=edge" http-equiv="X-UA-Compatible">
  <meta content="width=device-width,initial-scale=1" name="viewport">
  <meta content="description" name="description">
  <meta name="google" content="notranslate" />

  <!-- Disable tap highlight on IE -->
  <meta name="msapplication-tap-highlight" content="no">
  
  <link href="./assets/apple-touch-icon.png" rel="apple-touch-icon">

 

  <title>Omat sivut</title>  

<link href="../css/main.css" rel="stylesheet"></head>

<body>

 <!-- Add your content of header -->

 
<header>

<div class="topnav" style="margin-top: -80px;" id="myTopnav">
<a href="../newPoll.php" class="active">Create new</a>
  <a href="./kirjaudu.php" style="font-size: 17px; right: 108px;" class="bractive">Login</a>

    <div class="container">
      <div style="float: left;">
        <a> </a>
        <a href="./rekisiteroidy.php">Register</a>
        <a href="./index.php">Index</a>
 

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