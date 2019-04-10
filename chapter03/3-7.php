<?php
	function sum($subject1,$subject2,$subject3){         //定义计算总分的函数
	   	return $subject1 + $subject2 + $subject3;       //返回总分
	}
	function avg($subject1,$subject2,$subject3,$number){       //定义计算平均分的函数
	   	return sum($subject1,$subject2,$subject3) / $number;  //返回平均分
	}
	$chinese = 90;
 	$math = 85;
	$english = 79;
	$number = 3;
	echo "平均分为" . avg($chinese,$math,$english,$number);
?>
