<?php  
    if($_SESSION["error_auth"]) {
        unset($_SESSION["error_auth"]);
        $alert = "Неверный email и/или пароль !";
        include "alert.php";
    }
?>
<form name="auth" action="auth.php" method="post"></form>
<table>
   <tr>
       <td>E-mail:</td>
       <td>
           <input type="text" name="email"/>
       </td>
       <td>Пароль:</td>
       <td>
           <input type="password" name="password" />
       </td>
   </tr>
   <tr>
       <td colspan="4">
           <input type="submit" name="button-auth" value="Войти" />
       </td>
   </tr>
</table>