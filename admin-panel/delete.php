<?php
    require_once '../db.php';

    if(isset($_GET['id'])){
        $id = $_GET['id'];
        $sql = "DELETE FROM admins WHERE id = {$id}";

        if($conn->query($sql)){
            exit(header("Location: /admin-panel/admins.php"));
        }
    }else{
        exit(header("Location: /admin-panel"));
    }
?>