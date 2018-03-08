<?php
$title = $news->escapeStr($_POST['title']);
$category = abs((int)$_POST['category']);
$description = $news->escapeStr($_POST['description']);
$source = $news->escapeStr($_POST['source']);

if (empty($title) or empty($description)){
    $errMsg = "Заполните все поля!";
}else{
    if (!$news->saveNews($title,$category,$description,$source)){
        $errMsg = "Произошла ошибка при добавлении информации";
    }else{
        header("Location: news.php");
        exit();
    }
}



