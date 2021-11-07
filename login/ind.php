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
<div class="container">
    <div class="row">                 
        <h2>All listed polls</h2>
        <button class="btn btn-info" onclick="showPost(data,'current')">Current</button>
        <ul id="votesUl" class="list-group">
        </ul>
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


<script src="../js/topics.js"></script>
<script src="../js/jquery.js"></script>


<script>
  


</script>

<?php 
    include_once('footer.php');
?>
