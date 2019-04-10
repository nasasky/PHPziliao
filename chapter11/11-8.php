 <?php
    $filename = "C:/lamp/apache2/htdocs/hello.txt";  
    $handle1 = fopen($filename,'r');
    $content1 = fgetc($handle1);
    echo $content1."<br>";   
    fclose($handle);
    $handle2 = fopen($filename,'r');
    $content2 = fgets($handle2);
    echo $content2."<br>";  
    fclose($handle);
?>
