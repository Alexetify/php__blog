<h2>Результаты поиска: </h2>
<?php
    if (($_GET["button_search"]) && (!empty($_GET["words"]))) {
        $words = htmlspecialchars($_GET["words"]);
        $results = searchArticles($_GET["words"]);
        if (count($results) !=0) {
            for ($i = 0; $i < count($results); $i++){
                $number = $i +1;
                $link = "article.php?id=".$results[$i]["id"];
                $title = $results[$i]["title"];
                include "search_item.php";
            }
        }
    }
    else echo "Не задан поисковый запрос!";
?>