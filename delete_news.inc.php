<?php
$id = abs((int)$_GET['del']);
if($id){
    if(!$news->deleteNews($id)){
        $errMsg="Не удалось удалить запись";
    }
    else {
       header("Location: news.php");
       exit();
    }
}
