<?php
    session_start();
    include_once "../util.php";
    include_once "../db.php";
    if(isset($_SESSION['verified'])){
        $uid = $_SESSION['uid'];
        $sql = "DELETE FROM users WHERE id = $uid";
        if($conn->query($sql)){
            session_unset();
            session_destroy();
            header("Location: {$hostname}/register.php");
        }
    }else{
        header("Location: {$hostname}/login.php");
    }
?>