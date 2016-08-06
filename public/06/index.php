<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>HTTP Request</title>
</head>
<body>
    <form method="post">
        <p>
            <label for="size">Array size</label>
            <input type="text" name="size" id="size" value="<?=isset($_REQUEST['size']) ? $_REQUEST['size'] : ''?>">
        </p>
        <p>
            <label for="min">Min value</label>
            <input type="text" name="min" id="min" value="<?=isset($_REQUEST['min']) ? $_REQUEST['min'] : ''?>">
        </p>
        <p>
            <label for="max">Max value</label>
            <input type="text" name="max" id="max" value="<?=isset($_REQUEST['max']) ? $_REQUEST['max'] : ''?>">
        </p>
        <p>
            <input type="submit" name="submit" value="Generate">
        </p>
    </form>

    <?php
       /* echo "POST";
        var_dump($_POST);

        echo "GET";
        var_dump($_GET);*/

        /*echo "REQUEST";
        var_dump($_REQUEST);*/
        

        if($_REQUEST['submit']){
            if(count($_REQUEST) == 4){
                if($_REQUEST['size'] && $_REQUEST['min'] && $_REQUEST['max']){
                    if($_REQUEST['min'] < $_REQUEST['max']){
                        $array = [];
                        for ($i = 0; $i < intval($_REQUEST['size']); $i++){
                            $array[] = rand($_REQUEST['min'], $_REQUEST['max']);
                        }
                        var_dump($array);
                    }else{
                        echo "min должен быть меньше max";
                    }
                }
            }
        }
    ?>
</body>
</html>