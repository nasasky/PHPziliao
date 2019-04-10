<?php
 	ini_set('display_errors',1);//让错误显示
 	$a = 10;
 	if ($a < 20){
 		trigger_error('不能小于20');
	}
 ?>
