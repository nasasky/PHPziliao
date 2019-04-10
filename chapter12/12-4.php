<?php
 	//创建一个400x300的基于256色的图形
 	$img = imagecreate(400,300);
 	//指定输出为gif图片
 	header("Content-Type:image/gif");
 	//直接输出到浏览器
 	imagegif($img);
?>
