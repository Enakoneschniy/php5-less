<?php
include_once "../functions/gen_array.php";
include_once "../functions/sum_array.php";

$newArray = gen_array(10);
//var_dump($newArray);

$ar1 = gen_array(10);
$ar2 = gen_array(12);
$ar3 = gen_array(11);
var_dump($ar1);
var_dump($ar2);
var_dump($ar3);
$arr_res = sum_array($ar1, $ar2, $ar3);
var_dump($arr_res);

$arr_phones = [
    [
        'name' => 'phone1',
        'quantity' => 2,
        'price' => 123
    ],
    [
        'name' => 'phone2',
        'quantity' => 4,
        'price' => 156
    ],
    [
        'name' => 'phone3',
        'quantity' => 56,
        'price' => 67
    ],
    [
        'name' => 'phone4',
        'quantity' => 7,
        'price' => 15
    ],
    [
        'name' => 'phone5',
        'quantity' => 23,
        'price' => 163
    ],
    [
        'name' => 'phone6',
        'quantity' => 25,
        'price' => 11
    ]
];

var_dump($arr_phones);

uasort($arr_phones, function ($a, $b){
    if($a['quantity'] < $b['quantity']){
        return -1;
    }elseif($a['quantity'] == $b['quantity']){
        return 0;
    }else{
        return 1;
    }
});

var_dump($arr_phones);

function all_quantity($array, $function){
    $sum= 0;
    foreach ($array as $item){
        $sum += $function($item);
    }
    return $sum;
}

$res = all_quantity($arr_phones, function ($item){
    return $item['quantity'];
});
var_dump($res);
$res = all_quantity($arr_phones, function ($item){
    return $item['price'];
});
var_dump($res);