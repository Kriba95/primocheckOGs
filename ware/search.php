<?php
// header("Access-Control-Allow-Origin: *");
// header("Access-Control-Allow-Headers: access");
// header("Access-Control-Allow-Methods: POST");
// header("Content-Type: application/json; charset=UTF-8");
// header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With");










// if (isset($_GET["ala"])) {
//     require __DIR__.'/DatabaseConnection.php';
//     // require __DIR__.'/middlewares/Auth.php';
//     $allHeaders = getallheaders();
//     // $db_connection = new Database();
//     // $conn = $db_connection->dbConnection();
//     // $auth = new Auth($conn,$allHeaders);

//     $data = json_decode(file_get_contents("php://input"));
//     $returnData = [];
//         try {
//         $conn= new PDO("mysql:host=localhost;dbname=python;charset=utf8","root","");
//         $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
//     } catch(PDOException $e) {
//         echo "Error: " . $e->getMessage();
//     }
//     $ala = "%%";
//     $citys = "%%";
//     $ala = "%" .  strtolower($_GET["ala"]) . "%";
//     if (isset($_GET["citys"])) {
//         $citys = "%" . strtolower($_GET["citys"]) . "%";
//     }
//     try {
//         $perPage = 10;
//         // Calculate Total pages
//         $stmt = $conn->prepare("SELECT count(*) FROM spdata WHERE slug LIKE :ala AND CITY LIKE :citys");
//         $stmt->bindParam(':ala', $ala);
//         $stmt->bindParam(':citys', $citys);

//         if ($stmt->execute() == false){
//             die("Yhteys epäonnistui, tarkista: \n" . $conn->connect_error);
//         } else {
//             $resultss = $stmt->fetchAll(PDO::FETCH_ASSOC);            
//         }
//     } catch (PDOException $e) {
//         $data = array(
//             'error' => 'virhee'
//         );
//     }
//             $total_results = $resultss[0]["count(*)"];
//             $total_pages = ceil($total_results / $perPage);
//             // Current page
//             $page = isset($_GET['page']) ? $_GET['page'] : 1;
//             $starting_limit = ($page - 1) * $perPage;
//             $seuraava = $page;
//             $perPage = 10;
//     try {
//             $stmt = $conn->prepare("SELECT * FROM spdata WHERE slug LIKE :ala AND CITY LIKE :citys LIMIT $starting_limit,$perPage");
//             $stmt->bindParam(':ala', $ala);
//             $stmt->bindParam(':citys', $citys);


    
//             if ($stmt->execute() == false){
//                 die("Yhteys epäonnistui, tarkista: \n" . $conn->connect_error);
//             } else {
//                 $searchresult = $stmt->fetchAll(PDO::FETCH_ASSOC);
//             }
//         } catch (PDOException $e) {
//             $data = array(
//                 'error' => 'virhee'
//             );
//         }

//     } 
// else {        
//     require __DIR__.'/DatabaseConnection.php';
//     // require __DIR__.'/middlewares/Auth.php';
//     $allHeaders = getallheaders();
//     // $db_connection = new Database();
//     // $conn = $db_connection->dbConnection();
//     // $auth = new Auth($conn,$allHeaders);
//     $data = json_decode(file_get_contents("php://input"));
//     $returnData = [];
//         try {
//         $conn= new PDO("mysql:host=localhost;dbname=python;charset=utf8","root","");
//         $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
//     } catch(PDOException $e) {
//         echo "Error: " . $e->getMessage();
//     }
//         try {
//             $perPage = 10;
//             // Calculate Total pages
//             $stmt = $conn->prepare("SELECT count(*) FROM spdata");

//             if ($stmt->execute() == false){
//                 die("Yhteys epäonnistui, tarkista: \n" . $conn->connect_error);
//             } else {
//                 $resultss = $stmt->fetchAll(PDO::FETCH_ASSOC);            
//             }} catch (PDOException $e) {
//             $data = array(
//                 'error' => 'virhee'
//             );} $total_results = $resultss[0]["count(*)"];
//                 $total_pages = ceil($total_results / $perPage);
//                 // Current page
//                 $page = isset($_GET['page']) ? $_GET['page'] : 1;
//                 $starting_limit = ($page - 1) * $perPage;
//                 $seuraava = $page;
//                 $perPage = 10;

//             try {            
//                     $stmt = $conn->prepare("SELECT * FROM spdata LIMIT $starting_limit,$perPage");            
//                     if ($stmt->execute() == false){
//                         die("Yhteys epäonnistui, tarkista: \n" . $conn->connect_error);
//                     } else {
//                         $searchresult = $stmt->fetchAll(PDO::FETCH_ASSOC);            
//                     }
//                 } catch (PDOException $e) {
//                     $data = array(
//                         'error' => 'virhee'
//                     );
//                 }
// }














if (isset($_GET)) {
    require __DIR__.'/DatabaseConnection.php';
    // require __DIR__.'/middlewares/Auth.php';
    $allHeaders = getallheaders();
    // $db_connection = new Database();
    // $conn = $db_connection->dbConnection();
    // $auth = new Auth($conn,$allHeaders);

    $data = json_decode(file_get_contents("php://input"));
    $returnData = [];
        try {
        $conn= new PDO("mysql:host=localhost;dbname=database;charset=utf8","database","  ");
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    } catch(PDOException $e) {
        echo "Error: " . $e->getMessage();
    }
    $ala = "%%";
    $citys = "%%";
    $category = "%%";
    $haku = "%%";
    $tyosuhde = "%%";

    if (isset($_GET["ala"])) {
        $ala = $_GET["ala"];
        $ala = str_replace("%", "",$ala);
        $ala = str_replace("%", "",$ala);
        $ala = "%" . str_replace(" ", "%",$ala) . "%";

    }
    if (isset($_GET["citys"])) {
        $citys = $_GET["citys"];
        $citys = str_replace("%", "",$citys);
        $citys = str_replace("%", "",$citys);
        $citys = "%" . str_replace(" ", "%",$citys) . "%";
    }
    if (isset($_GET["category"])) {
        $category = str_replace("%20", "",$category);
        $category = str_replace(" ", "%",$category);
        $category = "%". $_GET["category"] . "%";
    }
    if (isset($_GET["haku"])) {
        // $haku = str_replace("%", "",$haku);
        $haku = str_replace(" ", "%",$haku);
        $haku = "%" . $_GET["haku"] . "%";
    }
    if (isset($_GET["tyosuhde"])) {
        $tyosuhde = str_replace("%", "",$tyosuhde);
        $tyosuhde = str_replace(" ", "%",$tyosuhde);
        $tyosuhde = "%" . $_GET["tyosuhde"] . "%";
    }
    $hakuu = "";
    $cityss = "";
    $alaa = "";
    $tyosuhdee = "";
    $categoryy = "";
    if ($haku === "%%"){
        $haku = false;
    } else {
        $hakuu = true;
    }
    if ($tyosuhde === "%%"){
        $tyosuhde = false;
    } else {
        $tyosuhdee = true;
    }
    if ($ala === "%%"){
        $ala = false;
    }  else {
        $alaa = true;
    }   
    if ($citys === "%%"){
        $citys = false;
    } else {
        $cityss = true;
    }    
    if ($category === "%%"){
        $category = false;
    } else {
        $categoryy = true;
    }

if ($categoryy === true) {
    try {
        $perPage = 10;
        // Calculate Total pages
        $stmt = $conn->prepare("SELECT count(*) FROM spdata 
                                WHERE categoryNames LIKE :categoryNames");
        $stmt->bindParam(':categoryNames', $category);



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
        $stmt = $conn->prepare("SELECT * FROM spdata 
                                WHERE categoryNames LIKE :categoryNames
                                LIMIT $starting_limit,$perPage");
        
        $stmt->bindParam(':categoryNames', $category);




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

if ($cityss === true) {
    try {
        $perPage = 10;
        // Calculate Total pages
        $stmt = $conn->prepare("SELECT count(*) FROM spdata 
                                WHERE CITY LIKE :citys");
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
        $stmt = $conn->prepare("SELECT *  FROM spdata 
                                WHERE CITY LIKE :citys
                                LIMIT $starting_limit,$perPage");
        
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

if ($cityss === true AND $alaa === true) {
        try {
            $perPage = 10;
            // Calculate Total pages
            $stmt = $conn->prepare("SELECT count(*) FROM spdata 
                                    WHERE slug LIKE :ala 
                                    AND CITY LIKE :citys");
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
            $stmt = $conn->prepare("SELECT *  FROM spdata 
                                    WHERE slug LIKE :ala 
                                    AND CITY LIKE :citys
                                    LIMIT $starting_limit,$perPage");
            
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


if ($hakuu === true) {
    if ($cityss === true) {
        try {
            $haku = str_replace(" ", "%",$haku);

            $perPage = 10;
            // Calculate Total pages
            $stmt = $conn->prepare("SELECT count(*) FROM spdata 
                                    WHERE CITY LIKE :citys
                                    AND bodyText LIKE :haku
                                   ");
            $stmt->bindParam(':haku', $haku);
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
            $stmt = $conn->prepare("SELECT * FROM spdata 
                                    WHERE CITY LIKE :citys
                                    AND bodyText LIKE :haku
                                    LIMIT $starting_limit,$perPage");
            $stmt->bindParam(':haku', $haku);
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
    } else {
        try {
            $haku = str_replace(" ", "%",$haku);

            $perPage = 10;
            // Calculate Total pages
            $stmt = $conn->prepare("SELECT count(*) FROM spdata 
                                    WHERE slug LIKE :haku
                                    OR bodyText LIKE :haku
                                    OR CITY LIKE :haku");
            $stmt->bindParam(':haku', $haku);

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
            $stmt = $conn->prepare("SELECT * FROM spdata 
                                    WHERE slug LIKE :haku
                                    OR bodyText LIKE :haku
                                    OR CITY LIKE :haku
                                    LIMIT $starting_limit,$perPage");
            $stmt->bindParam(':haku', $haku);



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