<?php
 	//创建一个200 x 200的空白图形
	$img = imagecreate(200,200);
	//设置字符串
	$string = 'http://php.itcast.cn';
	//设置背景颜色为白色
	$bg = imagecolorallocate($img, 255, 255, 255);
 	$black = imagecolorallocate($img, 0, 0, 0);
	$red = imagecolorallocate($img, 255, 0, 0);
 	$blue = imagecolorallocate($img, 0, 0, 255);
 	//将字符h输出到画布中的(20,20)处
 	imagechar($img, 5, 20, 20, $string, $black);
 	//将字符h垂直输出到画布中的(20,180)处
 	imagecharup($img, 5, 20, 180, $string, $black);
 	header('Content-type: image/png');
 	//将整个字符串输出到画布中的(10,100)处
 	imagestring($img, 5, 10, 100, $string, $red);
 	//将整个字符串垂直输出到画布中的(90,190)处
 	imagestringup($img, 5, 90, 190, $string, $blue);
 	imagepng($img);
 	imagedestroy($img);
?>
