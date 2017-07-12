<?php
function delete_cache($path, $pattern) {
    $path = rtrim(str_replace("\\", "/", $path), '/') . '/';
    $matches = Array();
    $entries = Array();
    $dir = dir($path);
    while (false !== ($entry = $dir->read())) {
        $entries[] = $entry;
    }
    $dir->close();
    foreach ($entries as $entry) {
        $fullname = $path . $entry;
        if ($entry != '.' && $entry != '..' && is_dir($fullname)) {
            delete_cache($fullname, $pattern);
        } else if (is_file($fullname) && preg_match($pattern, $entry)) {
            unlink($fullname); // delete the file
            echo $fullname," deleted.<br />"; #comment out if you do not want to echo the file deleted.
        }
    }
}