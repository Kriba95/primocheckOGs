<?php
try {
    $conn=new PDO('mysql:dbname=;host=localhost','sfasf','DBPassword'); 

    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

} catch(PDOException $e) {
    echo "Error: " . $e->getMessage();
}


