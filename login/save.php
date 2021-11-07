<?php 

// Valmistee Muuttujat
$username = "";
$nimi = "";
$sukunimi = "";
$email    = "";
$errors = array(); 

// Rekisteröi käyttäjän
if (isset($_POST['publish'])) {
// Asentaa Muuttujat
  $username = $_POST['username'];
  $nimi =  $_POST['nimi'];
  $sukunimi = $_POST['sukunimi'];
  $email = $_POST['email'];
  $password_1 = $_POST['password_1'];
  $password_2 = $_POST['password_2'];
}