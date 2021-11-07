<?php 
    include_once('header.php');
?>


<?php session_start(); ?>
<?php 
if (!isset($_GET['content'])){
  header('');
}

$id = intval($_GET['content']);


/*
echo

'<div class="post">' . 
    $result['title'] . '</a>' . 
    '<p class="post_content">' .
    $result['content'] . 
    '</p>' . 
    '<br>
    <br>' . 
    '<p>Published = ' . $result["published"] . ' </p>' .
    '<p>Timestamp = ' . $result["timestamp"] . '</p>' .
    '<p>Author = ' . $result["author"] .'</p>' .
    '<p>Id = ' . $result["id"] .  '</p>' .
'</div>';

*/

?>


<div class="container">

<h1></h1>

<p style="display:inline;">
    <b><span>Author:</span></b> 
    <span id="author"></span>
<br>
    <b><span>Published:</span></b> 
    <span id="published"></span>
<br>
    <b><span>Date:</span></b> 
    <span id="timestamp"></span>
</p>
<br>
<br>


<div id="content"></div> 



</div>

<div class="container wow pulse">
    <div class="row">
      <div id="vasenikkuna" class="col-xs-12 col-md-6">
        <ul id="vaihtoehdotUl" class="list-group"></ul>
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
<div class="container">
  <div class="row">
    <div class="col-">
      <ul id="kommentUl" class="list-group"></ul>
      <form name="komment">
      <fieldset>
      <h4>Comments</h4>
      <div class="inputgroup">
          <div class="msgtwo error"></div>                                
          <input id="teksti" style="width: 100%; float: left;" class="inputgroup" type="text" name="teksti" placeholder="Comment">
          <button style="float: right;" type="submit" class="btn-primary" name="komment">Comment</button>
          <br>
          <br>
          <a href="./" style="float: left;" class="btn btn-primary navbar-btn" title="">Go back</a>
      </div>  
      </fieldset>
    </div>
  </div>
</div>

<script src="../js/postGet.js"></script>