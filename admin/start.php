<?php
    session_start();
    require_once "../lib/functions.php";
    if (!((checkUser($_SESSION["email"], $_SESSION["password"])) && (isAdmin($_SESSION["email"])))) {
        header("Location: /admin/auth.php");
        exit;
    }

?>