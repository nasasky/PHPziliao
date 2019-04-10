<?php
 	//将字符串转成时间戳然后格式化输出
 	echo date("Y-m-d H:i:s",strtotime("2014-5-14 17:20:55"))."<br />";
 	//输出明天的这个时间点
 	echo date("Y-m-d H:i:s",strtotime("+1 day"))."<br />";
 	//输出三个月之前的这个时间点
	echo date("Y-m-d H:i:s",strtotime("-3 month"))."<br />";
 	//输出下个星期一的日期时间
 	echo date("Y-m-d H:i:s",strtotime("next monday"))."<br />";
?>
