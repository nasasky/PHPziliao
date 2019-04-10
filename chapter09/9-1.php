<?php
	//创建两个Cookie，并设置Cookie的有效期
	setcookie("city", "北京市", time() +60*60*1);
	setcookie("district", "海淀区", time() +60*60*1);
	echo 'cookie创建成功!';
?>
