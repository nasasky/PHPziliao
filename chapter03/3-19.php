 <?php
	header("Content-Type:text/html;charset=utf-8");
 	 //定义一个函数，用于精确获取时间
 	function microtime_float(){
	 	list($usec, $sec) = explode(" ", microtime());
	    return ((float)$usec + (float)$sec);
 	}
 	$time_start = microtime_float();
 	usleep(1000);
 	$time_end = microtime_float();
  	$time = $time_end - $time_start;
  	echo "执行该脚本花费了{$time}秒";
?> 
