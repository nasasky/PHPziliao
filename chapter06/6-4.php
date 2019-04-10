<?php
 	$a = 5;
 	if ($a < 10){
 	    error_log("$a小于10",0); 
 		echo "here";
 	}
 	if ($a == 10){
		error_log("$a等于10",1,"xxx@itcast.cn");
 	}
	if ($a > 10){
		error_log("$a大于10",3,"D:/error.log");
	}
?>
