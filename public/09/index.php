<?php
/*$handle = fopen('begin.txt', 'a+');
fwrite($handle, "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Magnam, repellendus.\r\n");
fclose($handle);*/

function space_html($string){
    $string = str_replace(' ', '&nbsp;', $string);
    return $string;
}

$handle = fopen('begin.txt', 'r');
$content = fread($handle, filesize('begin.txt'));
$content = space_html($content);
$content = nl2br($content);
fclose($handle);
//echo $content;
//file_put_contents('begin.txt', 'blab lbalbalbsdg', FILE_APPEND);

$arr_file = file('begin.txt');
//var_dump($arr_file);

$arr_file[] = "Hello world";

$handle = fopen('begin.txt', 'w+');
$tmp_str = '';
foreach ($arr_file as $key => $str){
    if($key == count($arr_file) - 1) {
        $tmp_str .= $str . "\r\n";
    }else{
        $tmp_str .= $str;
    }
}
//fwrite($handle, $tmp_str);
fclose($handle);

include_once '../functions/gen_array.php';

/*$ar_numbers = gen_array(10);
var_dump($ar_numbers);

$json = json_encode($ar_numbers);
echo $json;

file_put_contents('test_json', $json);*/

$res_str = file_get_contents('test_json.json');

$res_json = json_decode(json_encode(json_decode($res_str)));

var_dump($res_json);