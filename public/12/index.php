<?php
include_once "init.php";

/*$animal = new Animal();
var_dump($animal);
echo 'sdsada';*/

$sharik = new Dog("Шарик", 5, 'red', 'husky');
$skubi = new Dog("Скубиду", 99999, 'yellow', 'abstract');
$hatiko = new Dog("Хатико", 40, 'black', 'hus');

var_dump($sharik);
var_dump($skubi);
var_dump($hatiko);

echo $sharik->setName('Шарик')->setAge(7)->getInfo();
//echo $skubi->setName('Му-му')->setAge(67)->getInfo();

//$sharik->setAge(4);

//echo $sharik->getInfo();
if($sharik instanceof Animal){
    echo '<br>OK';
}
 $func = function (){

 };


 if($func instanceof Closure){
     echo '<br>OKAY';
     $func();
 }