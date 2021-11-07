<?php
session_start();

// Valmistee Muuttujat
$username = "";
$nimi = "";
$sukunimi = "";
$email    = "";
$errors = array(); 

// Yhdistää databaseen
require('./backend/server-g.php');

// Rekisteröi käyttäjän
if (isset($_POST['reg_user'])) {
// Asentaa Muuttujat
  $username = $_POST['username'];
  $nimi =  $_POST['nimi'];
  $sukunimi = $_POST['sukunimi'];
  $email = $_POST['email'];
  $password_1 = $_POST['password_1'];
  $password_2 = $_POST['password_2'];

  // tarkistaa
  if (empty($username)) { array_push($errors, "Username is must"); }
  if (empty($nimi)) { array_push($errors, "Firstname is must"); }
  if (empty($sukunimi)) { array_push($errors, "Last name is must"); }
  if (empty($email)) { array_push($errors, "Email is must"); }
  if (empty($password_1)) { array_push($errors, "Password is must"); }
  if ($password_1 != $password_2) {
	array_push($errors, "Password does not match!");
  }

  // Tarkistaa onko käyttäjä tai @ rekisteröity
 
  try {
    $stmt = $conn->prepare("SELECT * FROM users WHERE username='$username' OR email='$email' LIMIT 1");
      if ($stmt->execute() == false){
        die("Yhteys epäonnistui, tarkista: \n" . $conn->connect_error);
    } else {
        $result = $stmt->fetch(PDO::FETCH_ASSOC);

        $user = $result;
    }
  } catch (PDOException $e) {
    $result = array(
        'error' => 'virhee'
    );
  }

  
  if ($user) { // Tarkistaa käyttäjän
    if ($user['username'] === $username) {
      array_push($errors, "This username already exist!");
    }

    if ($user['email'] === $email) { // Tarkistaa sähköpostin
      array_push($errors, "Email already taken!");
    }
  }

// jos ei ole käyttäjää rekisteröidy
  if (count($errors) == 0) {
    $password = md5($password_1);//muuntaa salasanan md5 salaukseen

    try {
      $stmt = $conn->prepare("INSERT INTO users (username, nimi, sukunimi, email, password) 
                          VALUES(:username, :nimi, :sukunimi, :email, :password);");
  
  
      $stmt->bindParam(':username', $username);
      $stmt->bindParam(':nimi', $nimi);
      $stmt->bindParam(':sukunimi', $sukunimi);
      $stmt->bindParam(':email', $email);
      $stmt->bindParam(':password', $password); //md5 salasana

      
      if($stmt->execute() == false){
        $data = array(
            'errroe' => ' erere lisätty'
        );
    } else {
        $data = array(
            'onnistui' => 'hello'
        );
    } 
  }   catch (PDOException $e) {
    $data = array(
        'onnistui' => $e->getMessage()
    );
  }

  	$_SESSION['username'] = $username;
    

  	$_SESSION['success'] = "Olet nyt kirjautunut sisään"; // jos onnistuu vie indexiin
  	header('location: index.php');
  }
}


// Seuraavaksi jos käyttäjä haluaa kirjautua
if (isset($_POST['login_user'])) {

    $username = $_POST['username'];
    $password = $_POST['password']; 
  
    if (empty($username)) { //tarkistaa onko kenttä tyhjä x2
        array_push($errors, "Username is must");
    }
    if (empty($password)) {
        array_push($errors, "Password is must");
    }
  
    if (count($errors) == 0) {
      try {
        $password = md5($password); // muntaa salasanan md5 salaukseksi ja sen jälkeen tarkistaa löytyykö vastaavanlainen md5 salasana 
        $stmt = $conn->prepare("SELECT username, password FROM users WHERE username = :username");

        $stmt->execute(array(
					':username' => $username
					));
				$data = $stmt->fetch(PDO::FETCH_ASSOC);

				if($data == false){
          array_push($errors, "Username or password is wrong, try again.");	// jos käyttäjänimi on wirheellinen		
        } else {
					if($password == $data['password']) {
						$_SESSION['username'] = $data['username'];
						$_SESSION['password'] = $data['password'];
            if($username == "admin"){
              header('Location: ../admin/index.php'); //JOS Käyttäjänimi ja salasana matchaa heittää Admin käyttöliittymään.
            } else
						header('Location: index.php'); //Muuten käyttäjänimi ja salasana matchaa heittää indeksiin. Allgood,
						exit;
					}
					else
          array_push($errors, "Username or password is wrong, try again.");	// jos Salasana on wirheellinen			
				}
			} catch (PDOException $e) {
      $data = array(
          'onnistui' => $e->getMessage()
      );
    }
  }
  }
  
  ?>