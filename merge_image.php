<?php

$uni = $_POST['uni'];
json_decode($uni);

$uid = $_POST['uid'];
json_decode($uid);

$size = getimagesize('./input/input.jpeg');
$width = $size[0];
$height = $size[1];
$dest = imagecreatefromjpeg('./input/input.jpeg');
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

$path_parts = pathinfo('./output/output.jpeg');

$file_path = $path_parts['dirname']."/".$path_parts['basename'];

echo "http://support.moraspirit.com/output/output".$uid.".jpeg";