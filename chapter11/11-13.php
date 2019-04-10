<?php
    $fp = fopen("lock.txt", "w+");  
    if (flock($fp, LOCK_EX)) { // 取得独占锁定
        fwrite($fp, "Write something here\n");
        flock($fp, LOCK_UN); // 释放锁定
    } else {
        echo "文件不能被锁定";
    }
    fclose($fp);  //关闭文件资源
?>
