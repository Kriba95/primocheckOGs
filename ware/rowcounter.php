<?php
// header("Access-Control-Allow-Origin: *");
// header("Access-Control-Allow-Headers: access");
// header("Access-Control-Allow-Methods: POST");
// header("Content-Type: application/json; charset=UTF-8");
// header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With");





if (isset($_GET["ala"])) {
    require __DIR__.'/DatabaseConnection.php';
    // require __DIR__.'/middlewares/Auth.php';
    $allHeaders = getallheaders();
    // $db_connection = new Database();
    // $conn = $db_connection->dbConnection();
    // $auth = new Auth($conn,$allHeaders);

    $data = json_decode(file_get_contents("php://input"));
    $returnData = [];
        try {
        $conn= new PDO("mysql:host=localhost;dbname=python;charset=utf8","root","");
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    } catch(PDOException $e) {
        echo "Error: " . $e->getMessage();
    }
    $ala = "%%";
    $citys = "%%";
    $ala = "%" . strtolower($_GET["ala"]) . "%";
    $citys = "%" . strtolower($_GET["citys"]) . "%";
    try {
        $perPage = 10;
        // Calculate Total pages
        $stmt = $conn->prepare("SELECT count(*) FROM spdata WHERE slug LIKE :ala AND CITY LIKE :citys");
        $stmt->bindParam(':ala', $ala);
        $stmt->bindParam(':citys', $citys);

        if ($stmt->execute() == false){
            die("Yhteys epäonnistui, tarkista: \n" . $conn->connect_error);
        } else {
            $resultss = $stmt->fetchAll(PDO::FETCH_ASSOC);            
        }
    } catch (PDOException $e) {
        $data = array(
            'error' => 'virhee'
        );
    }
            $total_results = $resultss[0]["count(*)"];
            $total_pages = ceil($total_results / $perPage);
            // Current page
            $page = isset($_GET['page']) ? $_GET['page'] : 1;
            $starting_limit = ($page - 1) * $perPage;
            $seuraava = $page;
            $perPage = 10;
    try {
            $stmt = $conn->prepare("SELECT * FROM spdata WHERE slug LIKE :ala AND CITY LIKE :citys LIMIT $starting_limit,$perPage");
            $stmt->bindParam(':ala', $ala);
            $stmt->bindParam(':citys', $citys);

    
            if ($stmt->execute() == false){
                die("Yhteys epäonnistui, tarkista: \n" . $conn->connect_error);
            } else {
                $searchresult = $stmt->fetchAll(PDO::FETCH_ASSOC);
            }
        } catch (PDOException $e) {
            $data = array(
                'error' => 'virhee'
            );
        }

    } 
else {        
    require __DIR__.'/DatabaseConnection.php';
    // require __DIR__.'/middlewares/Auth.php';
    $allHeaders = getallheaders();
    // $db_connection = new Database();
    // $conn = $db_connection->dbConnection();
    // $auth = new Auth($conn,$allHeaders);
    $data = json_decode(file_get_contents("php://input"));
    $returnData = [];
        try {
        $conn= new PDO("mysql:host=localhost;dbname=python;charset=utf8","root","");
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    } catch(PDOException $e) {
        echo "Error: " . $e->getMessage();
    }
        try {
            $perPage = 10;
            // Calculate Total pages
            $stmt = $conn->prepare("SELECT count(*) FROM spdata");

            if ($stmt->execute() == false){
                die("Yhteys epäonnistui, tarkista: \n" . $conn->connect_error);
            } else {
                $resultss = $stmt->fetchAll(PDO::FETCH_ASSOC);            
            }} catch (PDOException $e) {
            $data = array(
                'error' => 'virhee'
            );} $total_results = $resultss[0]["count(*)"];
                $total_pages = ceil($total_results / $perPage);
                // Current page
                $page = isset($_GET['page']) ? $_GET['page'] : 1;
                $starting_limit = ($page - 1) * $perPage;
                $seuraava = $page;
                $perPage = 10;

            try {            
                    $stmt = $conn->prepare("SELECT * FROM spdata LIMIT $starting_limit,$perPage");            
                    if ($stmt->execute() == false){
                        die("Yhteys epäonnistui, tarkista: \n" . $conn->connect_error);
                    } else {
                        $searchresult = $stmt->fetchAll(PDO::FETCH_ASSOC);            
                    }
                } catch (PDOException $e) {
                    $data = array(
                        'error' => 'virhee'
                    );
                }
}

    
    
    