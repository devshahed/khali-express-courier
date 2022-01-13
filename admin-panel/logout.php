<?php
session_start();
if(!isset($_SESSION['username'])){
    exit(header("Location: /admin-panel/login.php"));
}
session_unset();
session_destroy();
header("Location: /admin-panel/login.php");