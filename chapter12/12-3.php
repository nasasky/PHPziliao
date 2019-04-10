<?php
 	//创建画布
 	$img = imagecreate(300,200);
 	// 背景设为红色
 	imagecolorallocate($img, 255, 0, 0);
 	imagegif($img);
?> 
