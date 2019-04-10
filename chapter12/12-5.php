<?php
 	// 新建一个400 x 300 的空白图像
 	$img = imagecreatetruecolor(400, 300);
 	// 设置椭圆的颜色
 	$col_ellipse = imagecolorallocate($img, 255, 255, 255);
 	// 画一个椭圆
 	imageellipse($img, 200, 150, 300, 200, $col_ellipse);
 	// 输出图像
 	header("Content-type: image/png");
 	imagegif ($img);
 	imagedestroy($img);
?>
