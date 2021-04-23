<?php
    $servername = "localhost";
    // $servername = "zack.stw.com"; //serverZack
    $username = "root";
    $password = "";
    $db_name = "testshop";

    $conn = new mysqli($servername, $username, $password, $db_name) ;

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    


?>