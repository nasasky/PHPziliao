 <?php
 	 //定义名为GREETING的常量，true表示常量大小写不敏感
	define("GREETING", "Hello you.", true); 
	echo GREETING; // 输出常量值
	echo Greeting; // 输出常量值
	 //定义名为CONSTANT的常量，默认常量大小写敏感
	define("CONSTANT", "Hello world"); 
	echo CONSTANT; // 输出常量值
	echo Constant; // 输出常量值
 ?>
