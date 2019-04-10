<?php
    $filename = "write.txt";
    $content = "传智播客欢迎你！\n";
    file_put_contents($filename,$content,FILE_APPEND); //以追加方式写入
    echo '写入成功';
?>
