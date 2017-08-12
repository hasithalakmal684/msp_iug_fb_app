<?php

$uni = $_POST['uni'];
json_decode($uni);

$param_uid = $_POST['uid'];
json_decode($param_uid);

//$uid = $_POST['uid'];
$uid = rand(100000,9999999);

$size = getimagesize('./input/input'.$param_uid.'.jpeg');
$width = $size[0];
$height = $size[1];
$dest = imagecreatefromjpeg('./input/input'.$param_uid.'.jpeg');
$src = imagecreatefromgif('./frames/'.$uni.'.gif');

//Copy and merge
imagecopymerge($dest, $src, 0, 0, 0, 0, $width, $height, 100);

// Output and free from memory
header('Content-Type: image/jpeg');
//$path = 'D:\xampp\htdocs\FBApp\output';
//Save the image
imagejpeg($dest, './output/output'.$uid.'.jpeg');

imagedestroy($dest);
imagedestroy($src);

$path_parts = pathinfo('./output/output'.$uid.'.jpeg');

$file_path = $path_parts['dirname']."/".$path_parts['basename'];

$json_obj = new \stdClass();
$json_obj->uid = $uid;
$json_obj->image = 'http://support.moraspirit.com/output/output'.$uid.'.jpeg';
$strJSON = json_encode($json_obj);
//echo "http://support.moraspirit.com/output/output".$uid.".jpeg";
echo $strJSON;
