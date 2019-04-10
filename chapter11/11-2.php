<?php
    $filename = "C:/lamp/apache2/htdocs/index.php"; 
    if (file_exists($filename)) {
        echo "The file exists";
    } else {
        echo "The file does not exist";
    }
?>
