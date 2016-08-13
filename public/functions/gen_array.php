<?php
function gen_array($size, $min = -100, $max = 100){
    $array = [];
    for ($i = 0; $i < $size; $i++){
        $array[] = rand($min, $max);
    }
    return $array;
}