<?php 
session_start(['cookie_lifetime' => 43200,'cookie_secure' => true,'cookie_httponly' => true]);


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

<?php include_once('header.php'); ?>





<div class="container">
  <h1></h1>

  <p style="display:inline;">
      <b><span>Author:</span></b> 
      <span id="author"></span>
  </p>
  <br>
  <br>


  <p id="content"></p> 


<!--
  <div id="msg" class="alert alert-dismissible alert-warning d-none wow bounce">
    <button id="sulje" type="button" class="close large" style="" data-dissmiss="alert">&times;</button>
    <h4 class="alert-heading"></h4>
    <p class="mb-0"></p>
  </div>
</div>
-->

<div class="container wow pulse">
    <div class="row">
      <div id="vasenikkuna" class="col-xs-12 col-md-6">
        <br>
        <br>
        <h4>Current situation</h4>
        <ul id="aanetUl" class="list-group"></ul>
      </div>
      <div id="chartti" class="col-xs-12 col-md-6">
        <canvas id="myChart" ></canvas>
      </div>
    </div>
</div>
<div class="section-container">
    <div class="container">
        <div class="row">
            <div class="col-">
            <h2>Posts</h2>
                <button class="btn btn-info" onclick="showPost(data,'notPublished')">Not published</button>
                <button class="btn btn-info" onclick="showPost(data,'waiting')">Waiting for approvment</button>                
                <button class="btn btn-info" onclick="showPost(data,'published')">Approved, Published.</button>                

                <ul id="votesUl" class="list-group">
                </ul>
            </div> 
        </div>
    </div>
</div>



<div class="container">
  <div class="row">
    <div class="col-">
      <ul id="votetUl" class="list-group"></ul>
      <form name="komment">
      <fieldset>
      <h4>Comments</h4>
      <div class="inputgroup">
          <div class="msgtwo error"></div>                                
          <input id="teksti" style="width: 100%; float: left;" class="inputgroup" type="text" name="teksti" placeholder="Comment">
          <br>
          <br>
        </div>  
      </fieldset>
    </div>
  </div>
</div>


<div id="listingTable"></div>

<a href="javascript:prevPage()" id="btn_prev">Prev</a>
<a href="javascript:nextPage()" id="btn_next">Next</a>
page: <span id="page"></span>


<script src="../js/myPosts.js"></script>
<script src="../js/jquery.js"></script>


<script>
  


</script>

<?php 
    include_once('footer.php');
?>
