<?php
//require_once("vendor/kraken-io/kraken-php/lib/Kraken.php");
$uid = $_POST['uid'];
json_decode($uid);

$data = $_POST['url'];
json_decode($data);

copy($data, './input/input'.$uid.'.jpeg');
//file_put_contents("./input/input.jpeg",file_get_contents($data));

/*
$kraken = new Kraken("caa1023112ba5b882440dc1afc9d3225", "6a1d21a8c1a085ecccbc2533e0ea91ee5cf0e0b4");

$params = array(
    "url" => "http://support.moraspirit.com/input/input.jpeg",
    "wait" => true,
    "resize" => array(
        "width" => 720,
        "height" => 720,
        "strategy" => "exact"
    )
);

$data = $kraken->url($params);

if ($data["success"]) {
    copy($data["kraked_url"], './input/input.jpeg');
    echo "Success. Optimized image URL: " . $data["kraked_url"];

} else {
    echo "Fail. Error message: " . $data["message"];
}

echo $data;

*/
include 'vendor/eventviva/php-image-resize/lib/ImageResize.php';
use \Eventviva\ImageResize;
$image = new ImageResize('./input/input'.$uid.'.jpeg');
$image->resize(720, 720, $allow_enlarge = True);
$image->save('./input/input'.$uid.'.jpeg');

echo "Image resized and saved";
