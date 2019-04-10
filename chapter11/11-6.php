 <?php
 	$file = fopen("C:/lamp/apache2/htdocs/index.html","r");
	echo "文件打开成功"."<br/>";
 	fclose($file);
	echo "文件关闭成功";
?>
