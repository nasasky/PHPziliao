<?php
    $filename = "write.txt";
    $content = "传智播客欢迎你！\n";
    $handle = fopen($filename,'w');  //打开文件
    fwrite($handle, $content);        //向文件写入数据
    fclose($handle);                    //关闭文件
    echo "文件写入成功";
?>
