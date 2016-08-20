<?php
include_once '../database.php';
$ar_news = all_news();
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Список новостей</title>
</head>
<body>
    <style>
        .news-list li{
            list-style: none;
        }
        .item a{
            color: #000;
        }
    </style>
    <ul class="news-list">
        <?php foreach ($ar_news as $news):?>
            <li>
                <div class="item">
                    <a href="detail.php?id=<?=$news['id']?>">
                        <h2><?=$news['title']?></h2>
                    </a>
                    <div class="preview"><?=$news['preview_text']?></div>
                </div>
            </li>
        <?php endforeach;?>
    </ul>
</body>
</html>
