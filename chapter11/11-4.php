<?php
 	$filename = "C:/wamp/www/index.html";
 	if (file_exists($filename)&is_file($filename)){
   	  echo "<pre>";
   	  print_r(stat($filename));
    	  echo "</pre>";
 	} else {
    	  echo "该文件不存在";
 	}
?>
