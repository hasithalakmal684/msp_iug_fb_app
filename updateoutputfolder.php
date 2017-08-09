<?php
  $files = glob("./output/*");
  $now   = time();
  echo $now;

  foreach ($files as $file) {
    if (is_file($file)) {
		echo filemtime($file);
      if ($now - filemtime($file) >= 60 * 60 * 24 * 2) { // 2 days
        unlink($file);
      }
    }
  }
?>
