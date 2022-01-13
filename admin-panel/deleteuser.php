<?php
require_once '../db.php';
session_start();
if(!isset($_SESSION['username'])){
    exit(header("Location: /admin-panel/login.php"));
}
if(isset($_GET['id'])){
    $id = $_GET['id'];
    $sql = "DELETE FROM users WHERE id = {$id}";

    if($conn->query($sql)){
        exit(header("Location: /admin-panel/users.php"));
    }
}else{
    exit(header("Location: /admin-panel"));
}