<?php
 	if (rmdir("path")){
	 	echo "删除目录成功";
 	} else {
	 	echo "删除目录失败";
 	}
 	if (rmdir("path1/path2")){ 
 		echo "删除目录成功";
 	} else {
 		echo "删除目录失败";
 	}
?>
