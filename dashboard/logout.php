<?php
    include_once("/util.php");
    session_start();
    session_unset();
    session_destroy();
    header("Location: {$hostname}/login.php");
?>