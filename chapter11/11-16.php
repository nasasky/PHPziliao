<?php
	$fp = fopen("D:/test.html", "a");
	fwrite($fp, "Write something here\n");
	fclose($fp);
	unlink('D:/test.html'); 
	echo "删除成功";
?>