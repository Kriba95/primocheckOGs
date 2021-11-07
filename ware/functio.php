<?php
require __DIR__.'/classes/Database.php';


$db_connection = new Database();
$conn = $db_connection->dbConnection();



if (isset($_GET)) {
    $dynU = $_GET["id"];
    try {
        $stmt = $conn->prepare("SELECT id, name, slug, description, count, _links 
                                FROM product
                                WHERE id = :dynU");
        $stmt ->bindParam(':dynU', $dynU);
    
        if ($stmt->execute() == false){
            die("Yhteys epäonnistui, tarkista: \n" . $conn->connect_error);
        } else {
            $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
            $kommentData = $result;
        }
    } catch (PDOException $e) {
        
        $kommentData = array(
            'error' => $e,

        );
    }
    
    header("Content-type: application/json;charset=utf-8");
    
    echo json_encode($kommentData);
    

} else {
    try {
        $stmt = $conn->prepare("SELECT id, name, slug, description, count, _links FROM product");
    
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
    
    header("Content-type: application/json;charset=utf-8");
    
    echo json_encode($kommentData);
    
    
}



 





