<?php
 	//删除名为"city"和"district"的Cookie
 	setcookie("city", "", time() - 60*60*1);
 	echo "名称为city的Cookie被删除！";
 	setcookie("district","", time() - 60*60*1);
 	echo "<br>名称为district的Cookie被删除！";
?>
