<?php
function sum_array($arr_one, $arr_two, ...$arrays){
    $length_one = count($arr_one);
    $length_two = count($arr_two);
    
    $max_length = max($length_one, $length_two);
    
    if(count($arrays) > 0){
        foreach ($arrays as $array){
            $tmp_length = count($array);
            if($tmp_length > $max_length){
                $max_length = $tmp_length;
            }
        }
    }
    $arr_result = [];
    
    for($i = 0; $i < $max_length; $i++){
        $arr_result[] = $arr_one[$i] + $arr_two[$i];
    }

    foreach ($arrays as $array){
        for($i = 0; $i < $max_length; $i++){
            $arr_result[$i] += $array[$i];
        }
    }
    return $arr_result;
}