<?php
include_once '../database.php';
$news = one_news($_GET['id']);
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title><?=$news['title']?></title>
</head>
<body>
    <h1><?=$news['title']?></h1>
    <div class="content">
        <?=$news['detail_text']?>
    </div>
</body>
</html>
