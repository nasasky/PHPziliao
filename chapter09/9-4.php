<?php
	header('Content-Type: text/html;charset=utf-8');
	//设置当前登录时间到Cookie中，有效期为半小时
           setcookie('lastLoginTime',time(),time()+60*30);
	//判断Cookie是否存在
	if(isset($_COOKIE['lastLoginTime'])){
	//如果存在则显示Cookie中保存的值
	echo '您上次访问的时间是:'.date('Y-m-d H:i:s',$_COOKIE['lastLoginTime']);
	}else{
	//如果不存在，则表示第一次访问本站
		echo '您是首次访问本站!!!';
	}
?>
