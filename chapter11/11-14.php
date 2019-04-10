<?php
    $file = "D:/itcast/source/hello.txt";
    $newfile = "D:/itcast/target/hello.txt.bak";
    if (!copy($file, $newfile)) {
        echo '文件拷贝失败';
    } else {
	    echo '拷贝成功';
    }
?>
