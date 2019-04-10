<?php
    //在这里只演示工作中可能使用到的几个
    echo "客户端的IP地址：".$_SERVER['REMOTE_ADDR']."<br>";//客户端IP地址
    echo "文件的存放位置：".$_SERVER['DOCUMENT_ROOT']."<br>"; 
    echo "脚本文件的名称：".$_SERVER['SCRIPT_FILENAME']."<br>"; 
    echo "表单的请求方式：".$_SERVER['REQUEST_METHOD']."<br>"; 
    echo "文件的相对路径：".$_SERVER['PHP_SELF']."<br>";  
?>
