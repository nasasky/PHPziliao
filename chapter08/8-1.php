<?php 
    if($_SERVER['REQUEST_METHOD']=='POST'){
        echo "姓名：".$_POST['name']."<br>";
        echo "年龄：".$_POST['age']."<br>";  
        exit;
    } 
?>
<form action="8-1.php" method="post">
    <p>姓名: <input type="text" name="name" /></p> 
    <p>年龄: <input type="text" name="age" /></p>
    <p><input type="submit" /></p> 
</form>
