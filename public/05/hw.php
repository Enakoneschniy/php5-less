<?php
$n = 10;
$arr = [];

for ($i = 1; $i <= $n; $i += 3){
    $arr[] = $i;
}

var_dump($arr);

$sum = 0;
foreach ($arr as $item){
    $sum += $item;
}
echo $sum;

echo "<br>";

$n = 10;
$arZero = [];
for ($i = 0; $i < $n; $i++){
    if($i%2 == 0)
        $arZero[] = 0;
    else
        $arZero[] = 1;
}
var_dump($arZero);

echo "<hr>";

$n = 20;
$arr = [];

for ($i = 1; $i <= $n; $i++){
    $arr[] = rand(-20, 20);
}
var_dump($arr);

$flag = false;
for ($i = 0; $i < $n; $i++){
    for ($j = $i + 1; $j < $n; $j++){
        if($arr[$i] == $arr[$j]){
            $flag = true;
            break;
        }
    }
    if($flag == true){
        break;
    }
}

echo $flag == true ? "yes" : 'no';

$arInput = [1,2,4,4,2,5];

$arOutput = [];

foreach ($arInput as $item){
    if(!in_array($item, $arOutput)){
        $arOutput[] = $item;
    }
}
var_dump($arInput);
var_dump($arOutput);