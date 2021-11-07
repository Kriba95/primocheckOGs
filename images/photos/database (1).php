

<?php

try {
    $conn=new PDO('mysql:dbname=DBNAME_pythons;host=localhost','DBNAME_pythons','  '); 

    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

} catch(PDOException $e) {
    echo "Error: " . $e->getMessage();
}

