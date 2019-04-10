<?php
    //以只读的方式打开当前目录的index.html文件
    $file1 = fopen("index.html","r"); 
    //以写入方式打开C:/lamp/apache/htdocs/目录下的index.html文件
    $file2 = fopen("C:/lamp/apache/htdocs/index.html","w"); 
    //以只读方式打开http远程文件
    $file3 = fopen("http://www.itcast.cn/","r"); 
    //以写入方式打开ftp远程文件
    $file4 = fopen("ftp://user:password@example.com/index.html","w");
?>

