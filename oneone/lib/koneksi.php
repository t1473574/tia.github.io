<?php
    define('HOST', 'localhost');
    define('USER', 'root');
    define('PASSWORD', 'tia56789');
    define('DB', 'latonetone');
    $conn = new mysqli(HOST,USER,PASSWORD,DB);
    if ($conn){
        //echo "Connected to database";
    }else{
        echo "Not connected to database";
    }

?>