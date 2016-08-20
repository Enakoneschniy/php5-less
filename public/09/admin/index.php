<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Админка</title>
</head>
<body>
    <form method="post">
        <div><input type="text" required name="title" placeholder="Заголовок"></div>
        <div><textarea name="preview" required placeholder="Краткое описание"></textarea></div>
        <div><textarea name="detail" required placeholder="Полное описание"></textarea></div>
        <div><input type="submit" name="add" value="Создать"></div>
    </form>
</body>
</html>
<?php
    if($_REQUEST['add'] !== ""){
        include_once "../database.php";
        add_news($_REQUEST['title'], $_REQUEST['preview'], $_REQUEST['detail']);
    }