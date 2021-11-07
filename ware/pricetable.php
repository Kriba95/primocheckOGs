<?php

require __DIR__.'/database.php';

$db_connection = new Database();
$conn = $db_connection->dbConnection();



 


try {
    $stmt = $conn->prepare("SELECT * FROM dbdata");

    if ($stmt->execute() == false){
        die("Yhteys epäonnistui, tarkista: \n" . $conn->connect_error);
    } else {
        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
        $kommentData = $result;

    }

} catch (PDOException $e) {
    $kommentData = array(
        'error' => 'virhee'
    );
}




