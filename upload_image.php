<?php

$uni = $_POST['uni'];
json_decode($uni);

$jsonString = file_get_contents('./data/album.json');
$data = json_decode($jsonString, true);
$count = $data['album']['count'];
$data['album']['count'] = (string)($count+1);
//$newJsonString = json_encode($data);
//file_put_contents('./data/album.json', $newJsonString);

//$data = json_decode($jsonString, true);
$unicount = $data['album'][$uni];
$data['album'][$uni] = (string)($unicount+1);
$newJsonString = json_encode($data);
file_put_contents('./data/album.json', $newJsonString);
echo "Count Updated";
