<?php
    $mysqli = false;
    function connectDB(){
        global $mysqli;
        $mysqli = new mysqli("localhost", "root", "", "myblog.ua");
        $mysqli->query("SET NAMES 'utf8'");
    }

    function getAllArticles(){
        return getAll("articles");
    }

    function getAllGuestBookComments(){
        return getAll("guestbook");
    }

    function getAllBanners(){
       return getAll("banners");
    }

    function getAll($table){
        global $mysqli;
        connectDB(); 
        $result_set = $mysqli->query("SELECT * FROM `$table` ");
        closeDB();
        return resultSetToArray($result_set);
    }
 
    function addGuestBookComment($name, $comment){
        global $mysqli;
        connectDB();
        $success = $mysqli->query("INSERT INTO `guestbook`(`name`,`comment`) VALUES ('$name','$comment')");
        closeDB();
        return $success;
        
    }

    function addUser($email, $password){
        global $mysqli;
        connectDB();
        $success = $mysqli->query("INSERT INTO `users` (`email`, `password`) VALUES ('$email`,'$password'')");
        closeDB();
        return $success;
        
    }

    function checkUser($email, $password){
        global $mysqli;
        connectDB();
        $result_set = $mysqli->query("SELECT * FROM `users` WHERE `email`='$email' AND `password`='$password'");
        closeDB();
        if ($result_set->fetch_assoc()) return true;
        else return false;
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

    function searchArticles($words) {
        $query_search = "";
        $arraywords = explode(" ", $words);
        foreach ($arraywords as $key => $value) {
            if (isset($arraywords[$key - 1])) $query_search .= " OR ";
            $query_search .= "(`full_text` LIKE '%$value%' OR `title` LIKE '%$value%')";
        }
        global $mysqli;
        connectDB();
        $result_set = $mysqli->query("SELECT * FROM `articles` WHERE $query_search ");
        closeDB();
        return resultSetToArray($result_set);
    }
 
    function closeDB(){
        global $mysqli;
        $mysqli->close();
    }
?>