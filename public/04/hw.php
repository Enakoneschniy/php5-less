<?php
//разбор домашнего задания по циклам
$size = 10;
?>
<style>
    td{
        width: 10px;
        height: 10px;
        text-align: center;;
    }
</style>

<table border="1" cellspacing="0">

    <?php for ($row = 1; $row <= $size; $row++):?>

        <tr>
            <?php for ($cell = 1; $cell <= $size; $cell++):?>

                <?php if($row == 1 || $cell == 1):?>
                    <td bgcolor="#add8e6"><?php echo $row * $cell?></td>
                <?php else:?>
                    <td><?php echo $row * $cell?></td>
                <?php endif;?>

            <?php endfor;?>
        </tr>

    <?php endfor;?>

</table>

<table border="1" cellspacing="0">
    <?php for ($row = 1; $row <= $size; $row++):?>

        <tr>
            <?php for ($cell = 1; $cell <= $size; $cell++):?>

                <td>
                    <?php if($row == $cell){
                        echo 1;
                    }elseif (($row + $cell) === $size + 1){
                        echo 2;
                    }elseif ($cell > $row && ($row + $cell) < $size + 1){
                        echo 3;
                    }elseif ($cell > $row && ($row + $cell) > $size + 1){
                        echo 4;
                    }elseif ($cell < $row && ($row + $cell) > $size + 1){
                        echo 5;
                    }else{
                        echo 6;
                    }?>

                </td>

            <?php endfor;?>
        </tr>

    <?php endfor;?>
</table>
