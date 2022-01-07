<?php
    $host = "localhost";
    $db_user = "root";
    $db_pass = "1122";
    $db_name = "khali_express_courier";

    $conn = new mysqli($host, $db_user, $db_pass, $db_name);
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }else{
        echo "success";
    }

?>