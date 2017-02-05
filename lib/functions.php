<?php
    $mysqli = false;
    function connectDB(){
        global $mysqli;
        $mysql = new mysqli("localhost", "root", "", "myblog.ua");
        $mysqli->query("SET NAMES 'utf6'");
    }
 
    function closeDB(){
        global $mysqli;
        $mysqli->close();
    }
?>