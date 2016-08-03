<?php
//константы

define('PI', 3.1415927);//способ 1

const NAME = "Evgeniy";//способ 2

//обращение к константам
echo PI, "<br>", NAME;

echo "<hr>";

echo __FILE__, "<br>", __DIR__;//стандартные константы

echo "<hr>";

$t = "0";
echo "t = $t ­­ ".gettype($t)."<br>";
$t += 2;
echo "t = $t ­­ ".gettype($t)."<br>";
$t = $t + 3.5;
echo "t = $t ­­ ".gettype($t)."<br>";
$t = 5 + "5 поросят";
echo "t = $t ­­ ".gettype($t)."<br>";
$t = 5.0 + "5 поросят";
echo "t = $t ­­ ".gettype($t);

echo "<hr>";

$t = "Всем"; // переменной t присваиваем значение "Всем"
$$t="привет!";// Переменной "Всем" присваиваем значение "привет!"
echo "$$t ".$$t."<br>";
echo "$t ${$t}<br>";
echo "$t $Всем";

echo "<hr>";
//передача переменной по ссылке
/*$t1 = 96;
$t2 = &​$t1;
echo "t1 = $t1; t2 = $t2";
$t1 = 315;
echo "t1 = $t1; t2 = $t2";*/

$str = "12345";
is_numeric($str);

//if

$a = 2;
$b = 3;

if($a < $b && $b == 2 || $a < 3){
    echo "$a > $b";
}else{
    echo "$a не больше $b";
}

echo "<hr>";

if($a > $b xor $b == 3){
    echo "True";
}else{
    echo "False";
}

echo "<hr>";
$a = 2;
$b = 3;

if($a < $b):
    echo "$a > $b";
else:
    echo "$a не больше $b";
endif;

echo "<hr>";
//тернарный оператор

echo $a > $b ? 'true' : 'false';

echo "<hr>";

if(true)
    echo "true........";
else
    echo "false........";
