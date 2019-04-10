<?php
    $path = "C:/lamp/apache2/htdocs/index.html";
    $file1 = basename($path); 
    echo $file1 , "<br />";
    $file2 = basename($path,".html"); 
    echo $file2;
?>
