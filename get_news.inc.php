<?php
$items = $news->getNews();
if (!is_array($items)):
    $errMsg = "Произошла ошибка при выводе новостей";
elseif (!count($items)):
    $errMsg = "Новостей нет";
else:
    foreach ($items as $item):
        $dt = date("d-m-Y H:i:s",$item['datetime']);
        $desk = nl2br($item['description']);
        echo <<<ITEMS
        <h3>{$item['title']}</h3>
        <p>
            $desk<br>{$item['category']}@ $dt
        </p>
        <p align="right">
            <a href="news.php?del={$item['id']}">Удалить</a>
        </p>
ITEMS;
        endforeach;
endif;