<?php
    session_start();
    $db = new Mysqli;
    $db->connect('localhost', 'root', '', 'plantinda');
    if(!$db){
        echo "db connection fail";
    }
?>