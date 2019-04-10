<?php
    //从文件中读取指定长度字符串
    $filename = "C:/lamp/apache2/htdocs/itcast.txt"; 
    $handle1 = fopen($filename, "r"); //以只读的方式打开文件
    $content1 = fread($handle1, 10); //从文件中读取前10个字节
    echo $content1."<br>";    
    fclose($handle1);  //关闭文件资源 
	//一次性读取整个文件
    $handle2 = fopen($filename, "r");  
    $content2 = fread($handle2, filesize($filename)); //一次读取整个文件
    echo $content2."<br>";   
    fclose($handle2);  
?>
