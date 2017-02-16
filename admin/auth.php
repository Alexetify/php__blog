 <?php
   session_start();
   require_once "../lib/functions.php";
   if (checkUser($_SESSION["email"], $_SESSION["password"])) {
       header("Location: /admin/index.php");
       exit;
   }
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xthml11/DTD/xthml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
   <head>
       <title>Вход в admin панель</title>
       <meta http-equiv="Content-type" content="text/html; charset=utf-8" />
       <link rel="stylesheet" type="text/css" href="styles/main.css" />
   </head>
   <body>
       <div>
          <?php if ($_SESSION["error_auth"] == 1) {
    echo "Неверные имя пользователя и/или пароль!";
    unset ($_SESSION["error_auth"]);
}?>
           <form name="auth" action="../auth.php" method="post">
               <p>E-mail:<br />
                   <input type="text" name="email" />
               </p>
               <p>Пароль:<br />
                   <input type="password" name="password" />
               </p>
               <p>
                   <input type="submit" name="button_auth" value="Войти" />
                </p>
           </form>
       </div>
   </body>
    
</html>
