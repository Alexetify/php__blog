<h2>Добавить запись</h2>
<form name="guestbook" action="" method="post">
    <table>
        <tr>
            <td>Имя:</td>
            <td>
                <input type="text" name="name" />
            </td>
        </tr>
        <tr>
           <td>Комментарий</td>
            <td>
                <input type="text" name="comment" />
            </td>
        </tr>
        <tr>
            <td colspan="2">
               <input type="submit" name="button_guestbook" value="Добавить" />
            </td>
        </tr>
    </table>
</form>
<h2>Записи в гостевой книге</h2>
<div>
    <?php 
       // $start = microtime(true);
        if (!empty ($_POST["button_guestbook"])) {
            $name = htmlspecialchars($_POST["name"]);
            $comment = htmlspecialchars($_POST["comment"]);
            if ((strlen($name) < 3) ||  (strlen($comment) < 3)) $success = false;
            else $success = addGuestBookComment($name, $comment);
            if (!$success){
                $alert = "Ошибка при добавлении новой записи ((( ";
                include "alert.php";
            }
        }
        $comments = getAllGuestBookComments();
        for ($i = 0; $i < count($comments); $i++){
            $name = $comments[$i]["name"];
            $comment = $comments[$i]["comment"];
            include "blocks/guestbook_comment.php";
        }
       // echo "Время выполнения скрипта: ".(microtime(true) - $start);
    ?>
</div>