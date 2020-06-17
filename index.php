<?php

// phpQueryの読み込み
require_once 'phpQuery-onefile.php';
// HTMLの取得
$doc = phpQuery::newDocumentFile('');

foreach ($doc->find('.food_item_title_and_price') as $entry) {
    $title = preg_replace('/\n|\r|\r\n/', '', pq($entry)->find('.food_item_title')->text());
    $price = preg_replace('/\n|\r|\r\n/', '', pq($entry)->find('.food_item_price')->text());
    $jsonData[] = ['title' => $title, 'price' => $price];
}

var_dump($jsonData);
//json を出力
// header(' Content-Type:application/json; charset=utf-8');
// echo json_encode($jsonData, JSON_UNESCAPED_UNICODE);

// require_once 'phpQuery-onefile.php';
// $doc = phpQuery::newDocumentFile('http://zubu.lo/zubulanding/dist/');

// $data = [];

// foreach ($doc->find('.food_item_title') as $entry) {
//     $title = preg_replace('/\n|\r|\r\n/', '', pq($entry)->text());
//     array_push($data, ['title' => $title]);
// }

// foreach ($data as $single) {
//     $single + array('osaka' => '大阪');
// }

// foreach ($doc->find('.food_item_title') as $entry) {
//     $title = preg_replace('/\n|\r|\r\n/', '', pq($entry)->text());
//     array_push($data, ['title' => $title]);
// }
// foreach ($doc->find('.food_item_title') as $entry) {
    // $title = pq($entry)->text();
    // $sample = preg_replace('/\n|\r|\r\n/', '', $title);
    // array_merge($jsonData[0], array('osaka' => '大阪'));
// }
// $data[0] += array('osaka' => '大阪');

// foreach ($doc->find('.food_item_title') as $entry) {
    // $title = pq($entry)->text();
    // $sample = preg_replace('/\n|\r|\r\n/', '', $title);
    // array_merge($jsonData[0], array('osaka' => '大阪'));
// }

// print_r($jsonData);
// $citys = array(['kanagawa' => '神奈川'], ['lalala' => '大黒摩季']);
// // $citys += array('osaka' => '大阪', 'fukuoka' => '福岡');
// // print_r($citys);
// $sample = [];
// foreach ($citys as $city) {
//     $sample += $city;
// }
// print_r($sample);
// echo '<br>';
// foreach ($doc->find('.food_item_ex') as $food_item_ex) {
//     $exText = pq($food_item_ex)->text();
//     // $ex = preg_replace('/\n|\r|\r\n/', '', $exText);
//     // array_push($jsonData, ['ex' => $ex]);
//     $jsonData[0]['ex'] = '';
// }
// print_r($jsonData);
// header('Content-Type:application/json; charset=utf-8');
// echo json_encode($jsonData, JSON_UNESCAPED_UNICODE);