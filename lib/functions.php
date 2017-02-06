<?php
    $mysqli = false;
    function connectDB(){
        global $mysqli;
        $mysqli = new mysqli("localhost", "root", "", "myblog.ua");
        $mysqli->query("SET NAMES 'utf8'");
    }

    function getAllArticles(){
        global $mysqli;
        connectDB(); 
        $result_set = $mysqli->query("SELECT * FROM `articles`");
        closeDB();
        return resultSetToArray($result_set);
    }

    function getArticle($id){
        global $mysqli;
        connectDB(); 
        $result_set = $mysqli->query("SELECT * FROM `articles` WHERE `id`='$id'");
        closeDB();
        return $result_set->fetch_assoc();
    }

    function resultSetToArray($result_set){
        $array = array();
        while (($row = $result_set->fetch_assoc()) != false)
            $array[] = $row;
        return $array;
        
    }
 
    function closeDB(){
        global $mysqli;
        $mysqli->close();
    }
?>