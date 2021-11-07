<?php
// header("Access-Control-Allow-Origin: *");
// header("Access-Control-Allow-Headers: access");
// header("Access-Control-Allow-Methods: POST");
// header("Content-Type: application/json; charset=UTF-8");
// header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With");

    require __DIR__.'/DatabaseConnection.php';
    // require __DIR__.'/middlewares/Auth.php';
    $allHeaders = getallheaders();
    // $db_connection = new Database();
    // $conn = $db_connection->dbConnection();
    // $auth = new Auth($conn,$allHeaders);

    $data = json_decode(file_get_contents("php://input"));
    $returnData = [];
    try {
        $conn= new PDO("mysql:host=localhost;dbname=DBNAME_pythons;charset=utf8","DBNAMEa_pythons","  ");
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            } catch(PDOException $e) {
                echo "Error: " . $e->getMessage();
            }
    // $ala = "%%";
    // $citys = "%%";
    // $ala = "%" . strtolower($_GET["ala"]) . "%";
    // $citys = "%" . strtolower($_GET["citys"]) . "%";

    try {
        // Calculated sutff
        $stmt = $conn->prepare("SELECT CategoryName, numero FROM rowdata");
    
    
        if ($stmt->execute() == false){
            die("Yhteys epäonnistui, tarkista: \n" . $conn->connect_error);
        } else {
            $resultas = $stmt->fetchAll(PDO::FETCH_ASSOC);
    
        }
    } catch (PDOException $e) {
        $data = array(
            'error' => 'virhee'
        );
    }
    //header('Content-Type', 'application/x-www-form-urlencoded');
    header("Content-type: application/json;charset=utf-8");
    echo json_encode($resultas);

