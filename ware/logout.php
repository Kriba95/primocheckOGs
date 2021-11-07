<?php    

    session_start();

    session_destroy();
    echo '{
        "session": "333",
        "status": "0"        
      }';
?>