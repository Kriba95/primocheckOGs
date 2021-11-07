<?php
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Headers: access");
header("Access-Control-Allow-Methods: POST");
header("Content-Type: application/json; charset=UTF-8");
header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With");

require __DIR__.'/classes/Database.php';
require __DIR__.'/middlewares/Auth.php';


$allHeaders = getallheaders();
$db_connection = new Database();
$conn = $db_connection->dbConnection();

$auth = new Auth($conn,$allHeaders);

$returnData = [
    "success" => 0,
    "status" => 401,
    "message" => "Unauthorized"
];

 

if($auth->isAuth()){
    $returnData = $auth->isAuth();
}

$data = json_decode(file_get_contents("php://input"));

if ($returnData['status'] === 200 && $returnData['success'] === 1 && $allHeaders["Host"] === "localhost") {
    $whatisrequest = $allHeaders["Authorization"];
    $todo = strtok($whatisrequest, " ");


    if (isset($data->deleteData->id)) {
        $id = $data->deleteData->id;
            try {
                $stmt = $conn->prepare("DELETE FROM eventdata WHERE id = :id;");
                $stmt->bindParam(':id', $id);
                if ($stmt->execute() == false){
                    $data = array(
                        'error' => 'virhee'
                    );
                } else {
                    $data = array(
                        'success' => ([$id . " = Deleted"])
                    );                    
                }            
            } catch (PDOException $e) {
                $data = array(
                    'virhereaes' => 'virhee'
                );
            }
            header("Content-type: application/json;charset=utf-8");
            
            echo json_encode($data);
    } // if($returnData['status'] === 200 && $returnData['success'] === 1) {

    if (isset($data->dataToSend->start)) {
        $eventStart = trim($data->dataToSend->start);
        $eventEnd = trim($data->dataToSend->end);
        $eventTitle = trim($data->dataToSend->title);
        $eventDesc = trim($data->dataToSend->comment);
        $eventUsername = trim($data->dataToSend->username);


        try {
            $insert_query = "INSERT INTO `eventdata`(`title`,`start`,`end`,`comment`, `username`) 
                            VALUES(:title, :start, :end, :comment, :username)";

            $insert_stmt = $conn->prepare($insert_query);
            // DATA BINDING
            $insert_stmt->bindValue(':title', htmlspecialchars(strip_tags($eventTitle)),PDO::PARAM_STR);
            $insert_stmt->bindValue(':start', htmlspecialchars(strip_tags($eventStart)),PDO::PARAM_STR);
            $insert_stmt->bindValue(':end', htmlspecialchars(strip_tags($eventEnd)),PDO::PARAM_STR);
            $insert_stmt->bindValue(':comment', htmlspecialchars(strip_tags($eventDesc)),PDO::PARAM_STR);
            $insert_stmt->bindValue(':username', htmlspecialchars(strip_tags($eventUsername)),PDO::PARAM_STR);

            $insert_stmt->execute();

        }   catch(PDOException $e){
            $returnData = msg(0,500,$e->getMessage());
        
        }   header("Content-type: application/json;charset=utf-8");
            echo json_encode($data);
    } 

    if (isset($data->dataToUpdate)) {
        date_default_timezone_set("Europe/Helsinki");

        $eventStart = trim($data->dataToUpdate->start);
        $eventEnd = trim($data->dataToUpdate->end);
        $eventTitle = trim($data->dataToUpdate->title);
        $eventDesc = trim($data->dataToUpdate->comment);
        $id = $data->dataToUpdate->id;
        $whomodified = "Username: " . $data->dataToUpdate->username . " When: " . date("H:M:D") . " Kello: " . date("h:i:sa");
        try {

            $stmt = $conn->prepare("UPDATE eventdata
                                    SET title = :title, start = :start, end = :end, comment = :comment, whomodified = :whomodified
                                    WHERE id = :id ;");
            $stmt->bindParam(":id", $id);
            $stmt->bindParam(":title", $eventTitle);
            $stmt->bindParam(":start", $eventStart);
            $stmt->bindParam(":end", $eventEnd);
            $stmt->bindParam(":comment", $eventTitle);
            $stmt->bindParam(":whomodified", $whomodified);


            // $insert_stmt->bindValue(':title', htmlspecialchars(strip_tags($eventTitle)),PDO::PARAM_STR);
            // $insert_stmt->bindValue(':start', htmlspecialchars(strip_tags($eventStart)),PDO::PARAM_STR);
            // $insert_stmt->bindValue(':end', htmlspecialchars(strip_tags($eventEnd)),PDO::PARAM_STR);
            // $insert_stmt->bindValue(':comment', htmlspecialchars(strip_tags($eventDesc)),PDO::PARAM_STR);
            // $insert_stmt->bindValue(':id', htmlspecialchars(strip_tags($id)),PDO::PARAM_STR);

            if($stmt->execute() == false){
            $data['error'] = 'error modifypoll';
            } else {
            $data['succesc'] = 'Jees lähetetty';
            }

            } catch (PDOException $e){
            $data['error'] = $e->getMessage();
        
        }
    } 

    if ($todo === "tyojutut") {
        $todo = "false";
        try {
            $stmt = $conn->prepare("SELECT id, title, start, end, comment, ispublished
                                    FROM tyokohteet");

            if ($stmt->execute() == false){
                die("Yhteys epäonnistui, tarkista: \n" . $conn->connect_error);
            } else {
                $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
                $eventdata = $result;
            }
        } catch (PDOException $e) {
            $kommentData = array(
                'error' => 'virhee'
            );
        }
        header("Content-type: application/json;charset=utf-8");
        
        echo json_encode($eventdata);

    }

    if ($returnData["user"]["isAuthor"] === "1") {
        if ($todo === "false") {
            return;
        }
        else {
            // Korjaa tämä Else komento, se hakee dataa turhaan
        try {
            $stmt = $conn->prepare("SELECT id, title, start, end, comment, ispublished
                                    FROM eventdata");

            if ($stmt->execute() == false){
                die("Yhteys epäonnistui, tarkista: \n" . $conn->connect_error);
            } else {
                $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
                $eventdata = $result;
            }
        } catch (PDOException $e) {
            $kommentData = array(
                'error' => 'virhee'
            );
        }
        header("Content-type: application/json;charset=utf-8");
        
        echo json_encode($eventdata);

    }}
    
    if (isset($data->companystuffdata)) {

        $yritys = trim($data->companystuffdata->yritys);
        $yritysosoite = trim($data->companystuffdata->yritysosoite);
        $yrityspuhelinnmero = trim($data->companystuffdata->yrityspuhelinnmero);
        $yritysytunnus = trim($data->companystuffdata->yritysytunnus);
        $yritysvalittajaoperattoritunnus = trim($data->companystuffdata->yritysvalittajaoperattoritunnus);
        $yritysyhteyshenkilo = trim($data->companystuffdata->yritysyhteyshenkilo);
        $yritysyhtpuh = trim($data->companystuffdata->yritysyhtpuh);
        $muutayks = trim($data->companystuffdata->muutayks);
        $muutakaks = trim($data->companystuffdata->muutakaks);
        $muutakol = trim($data->companystuffdata->muutakol);




        try {
            $insert_query = "INSERT INTO `yritysdata`(`yritys`,`yritysosoite`,`yrityspuhelinnmero`,`yritysytunnus`, `yritysvalittajaoperattoritunnus`, `yritysyhteyshenkilo`,`yritysyhtpuh`,`muutayks`,`muutakaks`,`muutakol`) 
                            VALUES(:yritys, :yritysosoite, :yrityspuhelinnmero, :yritysytunnus, :yritysvalittajaoperattoritunnus, :yritysyhteyshenkilo, :yritysyhtpuh, :muutayks, :muutakaks, :muutakol)";

            $insert_stmt = $conn->prepare($insert_query);
            // DATA BINDING
            $insert_stmt->bindValue(':yritys', htmlspecialchars(strip_tags($yritys)),PDO::PARAM_STR);
            $insert_stmt->bindValue(':yritysosoite', htmlspecialchars(strip_tags($yritysosoite)),PDO::PARAM_STR);
            $insert_stmt->bindValue(':yrityspuhelinnmero', htmlspecialchars(strip_tags($yrityspuhelinnmero)),PDO::PARAM_STR);
            $insert_stmt->bindValue(':yritysytunnus', htmlspecialchars(strip_tags($yritysytunnus)),PDO::PARAM_STR);
            $insert_stmt->bindValue(':yritysvalittajaoperattoritunnus', htmlspecialchars(strip_tags($yritysvalittajaoperattoritunnus)),PDO::PARAM_STR);
            $insert_stmt->bindValue(':yritysyhteyshenkilo', htmlspecialchars(strip_tags($yritysyhteyshenkilo)),PDO::PARAM_STR);
            $insert_stmt->bindValue(':yritysyhtpuh', htmlspecialchars(strip_tags($yritysyhtpuh)),PDO::PARAM_STR);
            $insert_stmt->bindValue(':muutayks', htmlspecialchars(strip_tags($muutayks)),PDO::PARAM_STR);
            $insert_stmt->bindValue(':muutakaks', htmlspecialchars(strip_tags($muutakaks)),PDO::PARAM_STR);
            $insert_stmt->bindValue(':muutakol', htmlspecialchars(strip_tags($muutakol)),PDO::PARAM_STR);

            $insert_stmt->execute();

        }   catch(PDOException $e){
            $returnData = msg(0,500,$e->getMessage());
        
        }   header("Content-type: application/json;charset=utf-8");
            echo json_encode($data);
    } 

    if ($todo === "morebeerlesssecure") {
        try {
          
            $stmt = $conn->prepare("SELECT id, title, start, end, comment, ispublished
                                    FROM eventdata
                                    WHERE username = :username");
            $stmt->bindParam(':username', $returnData["user"]["username"]);

            if ($stmt->execute() == false){
                die("Yhteys epäonnistui, tarkista: \n" . $conn->connect_error);
            } else {
                $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
                $eventdata = $result;
            }
        } catch (PDOException $e) {
            $kommentData = array(
                'error' => 'virhee'
            );
        }
        header("Content-type: application/json;charset=utf-8");
        
        echo json_encode($eventdata);

    } 

    if (isset($data->dataGetStuff)) {
        try {
            $stmt = $conn->prepare("SELECT id, workfor
                                    FROM usercompany
                                    WHERE user_id = :user_id");
            
            $stmt->bindParam(':user_id', $returnData["user"]["id"]);



            if ($stmt->execute() == false){
                die("Yhteys epäonnistui, tarkista: \n" . $conn->connect_error);
            } else {
                $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
                $eventdata = $result;
            }
        } catch (PDOException $e) {
            $kommentData = array(
                'error' => 'virhee'
            );
        }
        header("Content-type: application/json;charset=utf-8");
        
        echo json_encode($eventdata);

    }


}

    else if ($returnData['status'] === 401 && $returnData['success'] === 0 && $returnData['message'] === "Unauthorized") {
        $ifnottrue = [
            "onnistui" => "false",
            "status" => 404,
            "viesti" => "Käyttäjää ei tunnistettu, return...",
            "reason" => "Mahdollisesti, Käyttäjä ja Salasana on väärin. Vanhentutun ''Login Token'' tai yritys hakea dataa on sivun Luotettujen Domainen ulkopuolella. Älä yritä uudestaan!!!",
            "milloin" => time(),
            "kuka" => $allHeaders,
            "Sending this information and more, because of possible Hacking Attempt to. " => "tutkaapp |at| gmail.com"
        ];
        echo "Access denied, Unauthorized attempt outside website. Attempt recorded. ";
        echo "Also by visiting this website you agree, that your incorrect attepmt information is collected.";
        echo json_encode($ifnottrue);
    }