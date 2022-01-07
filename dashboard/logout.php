<?php
    session_start();
    include_once("../util.php");
    session_unset();
    session_destroy();
    exit(header("Location: {$hostname}/login.php"));
?>