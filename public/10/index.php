<?php
$pattern = "/I am ([0-9]+) years old/";

$str = 'hello, my name is Evgeniy, I am 23 years old. hello, my name Vasya, I am 34 years old';

$ar_res = [];

$res = preg_match_all($pattern, $str, $ar_res);

var_dump($ar_res);

$pt_number = "/^-?[0-9]+\.?[0-9]+$/";

$number = "3253465754352";

$result = preg_match($pt_number, $number);

var_dump($result);

$pt_letter = "/^[a-z \.]+$/i";

