<?php
	//省略所有参数，则使用当前时间
	echo date("Y-m-d H:i:s",mktime()).'<br />'; 
	//指定小时，其它值使用当前时间
	echo date("Y-m-d H:i:s",mktime(14)).'<br />';
	//指定小时和分，其它值使用当前时间
	echo date("Y-m-d H:i:s",mktime(14,28)).'<br />';
	//指定时分秒，其它值使用当前时间
	echo date("Y-m-d H:i:s",mktime(14,28,56)).'<br />';
	//指定时分秒和月份，其它值使用当前时间
	echo date("Y-m-d H:i:s",mktime(14,28,56,4)).'<br />';
	//指定时分秒，月份和日期，其它值使用当前时间
	echo date("Y-m-d H:i:s",mktime(14,28,56,4,10)).'<br />';
	//指定时分秒，月日年
	echo date("Y-m-d H:i:s",mktime(14,28,56,4,10,2013));
?>