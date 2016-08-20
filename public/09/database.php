<?php
function add_news($title, $preview_text, $detail_text){
    $db = file_get_contents("../database.json");
    $ar_news = [];
    if($db == ""){
        $ar_news[] = [
            'id' => 1,
            'title' => $title,
            'preview_text' => $preview_text,
            'detail_text' => $detail_text
        ];
        $json = json_encode($ar_news);
        file_put_contents('../database.json', $json);
    }else{
        $ar_news = json_decode($db, true);
        $id = $ar_news[count($ar_news) - 1]['id'];
        $ar_news[] = [
            'id' => $id + 1,
            'title' => $title,
            'preview_text' => $preview_text,
            'detail_text' => $detail_text
        ];
        $json = json_encode($ar_news);
        file_put_contents('../database.json', $json);
    }
}

function all_news(){
    $db = file_get_contents("../database.json");
    return json_decode($db, true);
}

function one_news($id){
    $db = file_get_contents("../database.json");
    $ar_news = json_decode($db, true);
    $res_news = [];
    foreach ($ar_news as $news){
        if($id == $news['id']){
            $res_news = $news;
        }
    }
    return $res_news;
}