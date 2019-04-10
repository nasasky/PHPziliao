<?php
    $path = $_SERVER['DOCUMENT_ROOT']."/error_log.txt"; 
    $data = 10;
    if($data > 5){
         //将调试信息记录到文件error_log.txt中
 	     file_put_contents($path,date("Y-m-d H:i:s")."数据大于5\r\n",FILE_APPEND);
    }
?>