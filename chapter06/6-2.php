<?php
 	ini_set('display_errors',1);
 	$rand_num = mt_rand(0,1);
 	echo $rand_num;
 	if($rand_num==0){
		//报告所有错误
		error_reporting(E_ALL);
 	}else{
		// 除了E_NOTICE，报告其他所有错误
		error_reporting(E_ALL & ~E_NOTICE);
	} 
	echo $info;
?>
