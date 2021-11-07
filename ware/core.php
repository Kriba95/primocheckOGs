<?php
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Headers: access");
header("Access-Control-Allow-Methods: POST");
header("Content-Type: application/json; charset=UTF-8");
header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With");

require __DIR__.'/DatabaseConnection.php';
// require __DIR__.'/middlewares/Auth.php';

$allHeaders = getallheaders();
// $db_connection = new Database();
// $conn = $db_connection->dbConnection();
// $auth = new Auth($conn,$allHeaders);




$data = json_decode(file_get_contents("php://input"));
$returnData = [];
    try {
    $conn= new PDO("mysql:host=localhost;dbname=database;charset=utf8","database'","  ");

    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

} catch(PDOException $e) {
    echo "Error: " . $e->getMessage();
}





if (isset($data->todo)){
    $id = $data->id;

    try {
        $stmt = $conn->prepare("SELECT * 
                                FROM spdata
                                WHERE id = :id
                                ");

        $stmt->bindParam(':id', $id);

        if ($stmt->execute() == false){
            die("Yhteys epäonnistui, tarkista: \n" . $conn->connect_error);
        } else {
            $result = $stmt->fetchAll(PDO::FETCH_ASSOC);

            $data = $result;
        }
    } catch (PDOException $e) {
        $data = array(
            'error' => 'virhee'
        );
    }

    header("Content-type: application/json;charset=utf-8");
    echo json_encode($data);
}

if (isset($data->etsi)){
    $ala = strtolower($data->ala);
    $citys = strtolower($data->citys);
    
    try {
        $stmt = $conn->prepare("SELECT *
                                FROM   spdata
                                WHERE  alas LIKE :ala
                                    OR city  LIKE :citys
                                ");

        $stmt->bindParam(':ala', $ala);
        $stmt->bindParam(':citys', $citys);


        if ($stmt->execute() == false){
            die("Yhteys epäonnistui, tarkista: \n" . $conn->connect_error);
        } else {
            $result = $stmt->fetchAll(PDO::FETCH_ASSOC);

            $data = $result;
        }
    } catch (PDOException $e) {
        $data = array(
            'error' => 'virhee'
        );
    }

    header("Content-type: application/json;charset=utf-8");
    echo json_encode($data);
}




if (isset($data->ilmoitus)) {
    try {
    $conn= new PDO("mysql:host=localhost;dbname=database';charset=utf8mb4","database'","  ");

    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

} catch(PDOException $e) {
    echo "Error: " . $e->getMessage();
}

    if ($data->sivu === "") {
        $sivu = "Etsitään";
    } else $sivu = $data->sivu;


    if ($data->sivu11 === "") {
        $sivu11 = "Etsitään...";
    } else $sivu11 = $data->sivu11;

    if ($data->sivu4 === "") {
        $sivu4 = "Budjetti Ei tiedossa";
    } else $sivu4 = $data->sivu4;


    $synctime = time();
    $sivu1 = $data->sivu1; 
   $sivu2 = $data->sivu2; 
   $sivu3 = $data->sivu3; 
   $sivu5 = $data->sivu5; 
   $sivu6 = $data->sivu6; 
   $sivu7 = $data->sivu7; 
   $sivu8 = $data->sivu8; 
   $sivu9 = $data->sivu9; 
   $sivu10 = $data->sivu10;
   $url = "https://www.primocheck.site/user/" .  $synctime;
   $id =  $synctime;

   
   $times =  $synctime;
   $savetime = date('d.m.Y', $times);


    try {
        $stmt = $conn->prepare("INSERT INTO dbdata (id, otsikkos, milloins, full, budjettis, url, sivu1, sivu2, sivu3, sivu5, sivu6, sivu7, sivu8, sivu9, sivu10, kuvauss) 
                            VALUES(:id, :otsikkos, :milloins, :full, :budjettis, :url, :sivu1, :sivu2, :sivu3, :sivu5, :sivu6, :sivu7, :sivu8, :sivu9, :sivu10, :kuvauss);");


        $stmt->bindParam(':otsikkos', $sivu);

        $stmt->bindParam(':sivu1', $sivu1);
        $stmt->bindParam(':sivu2', $sivu2);
        $stmt->bindParam(':sivu3', $sivu3);
        $stmt->bindParam(':budjettis', $sivu4);

        $stmt->bindParam(':sivu5', $sivu5);
        $stmt->bindParam(':sivu6', $sivu6);
        $stmt->bindParam(':sivu7', $sivu7);
        $stmt->bindParam(':sivu8', $sivu8);
        $stmt->bindParam(':sivu9', $sivu9);
        $stmt->bindParam(':sivu10', $sivu10);
        $stmt->bindParam(':kuvauss', $sivu11);
        $stmt->bindParam(':milloins', $savetime);
        $stmt->bindParam(':full', $sivu11);
        $stmt->bindParam(':url', $url);
        $stmt->bindParam(':id', $id);






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
    header("Content-type: application/json;charset=utf-8");
    echo json_encode($data);

}






