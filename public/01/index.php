<?php
    echo '<h1>Hello World</h1>';

    //это число

    /*
     * dfsdf
     * sdf
     * sdf
     * sfd
     * */

    $number = 12;
    //echo $number;

    echo $userName;

    $userName = "Vasya ".$number;
    $userName = 'Vasya $number';

    $userName .= ' lllllllll';

    echo $userName, "<br>";

    $float = 2.01;

    echo $float, "<br>";

    $a = 2;
    $b = 3;
    $res = $a + $b;
    echo $res;//echo $a + $b;

    echo '<hr>';

    $a = 2;
    $b = '3ffff';
    $res = $a + (integer)$b;
    echo $res;//echo $a + $b;

    echo '<hr>';

    $a = '3';
    $b = '3';
    $res = $a + $b;
    echo $res;//echo $a + $b;

    echo '<hr>';
    $a = 3;
    $b = 2;
    $res = $a / 0;
    $res = $res + 1;
    echo $res;

    echo '<hr>';

    $x = 10;
    echo $x, "<br>";
    $x += 12; //$x = $x + 1;

    echo $x++, "<br>";

    echo $x, "<br>";

    echo ++$x, "<br>";

