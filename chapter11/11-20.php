<?php
    $path = "D:/itcast";
    $handle = opendir($path);
    while (false !== ($file = readdir($handle))){
	    echo "$file <br />";
    }
    closedir($handle);
?>
