<?php
    // 将一个文件读入数组，本例中通过 HTTP 从 URL 中取得 HTML 源文件。
    $lines = file('http://www.itcast.cn/');
    // 在数组中循环，显示 HTML 的源文件并加上行号。
    foreach ($lines as $line_num => $line) {
        echo "Line #<b>{$line_num}</b> : " . htmlspecialchars($line) . "<br />\n";
    }
?>
