<?php
require_once './vendor/facebook/graph-sdk/src/Facebook/autoload.php';

$accesstoken = $_GET['tkn'];
$fb = new Facebook\Facebook([
  'app_id' => '799519263533753',
  'app_secret' => '3c74b2812d987a13eccd7b99087aca7b',
  'default_graph_version' => 'v2.10',
  ]);

try {
  // Returns a `Facebook\FacebookResponse` object
  $response = $fb->get('/me?fields=id,name', $accesstoken);
} catch(Facebook\Exceptions\FacebookResponseException $e) {
  echo 'Graph returned an error: ' . $e->getMessage();
  exit;
} catch(Facebook\Exceptions\FacebookSDKException $e) {
  echo 'Facebook SDK returned an error: ' . $e->getMessage();
  exit;
}

$user = $response->getGraphUser();

$id = $user['id'];

$pid = $_GET['pid'];
$uid = $_GET['uid'];

$file_path = './output/output'.$pid.'.jpeg';
$msg = '';
$link = '';
if($id == $uid){
  if(file_exists($file_path)) {
      header("Content-disposition: attachment; filename=".$pid.".jpeg");
      header('Content-type: application/octet-stream');
      readfile($file_path);
      $files = glob("./output/*");
  	  $now   = time();

  	foreach ($files as $file) {
  		if (is_file($file)) {
  			if ($now - filemtime($file) >= 60 * 60 * 24 * 2) { // 2 days
  				unlink($file);
  			}
  		}
  	}

    header("Location: http://support.moraspirit.com/dwnld_sucess.php?status=success");
  }else {
    header("Location: http://support.moraspirit.com/dwnld_sucess.php?status=fail");
  }
}else{
  header("Location: http://support.moraspirit.com");
}
?>
