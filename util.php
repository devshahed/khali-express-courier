<?php
    function hostname(){
        return isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] == "on"? "https://" . $_SERVER['HTTP_HOST']:"http://" . $_SERVER['HTTP_HOST'];
    }
    $hostname = hostname();
?>