<?php
 	$filename = "C:/lamp/apache2/htdocs/index.html";
 	if (file_exists($filename)&is_file($filename)){
	    echo "文件大小为" . filesize($filename) . "字节<br />";
	    echo "文件的创建时间为". date('Y-m-d',filectime($filename)) . "<br />";
	    echo "文件的修改时间为". date('Y-m-d',filemtime($filename)) . "<br />";
	    echo "文件的访问时间为". date('Y-m-d',fileatime($filename)) . "<br />";
	    echo is_readable($filename) ? "该文件可读<br />": "该文件不可读<br />";
	    echo is_writable($filename) ? "该文件可写<br />": "该文件不可写";
	    echo is_executable($filename) ? "该文件可执行<br />" : "该文件不可执行<br />";
 	} else {
	 	echo "该文件不存在";
 	}
?>
