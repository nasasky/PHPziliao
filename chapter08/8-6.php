<?php
    //判断通过URL传递的参数中是否有username
    if(isset($_GET['username'])){
 	    $val = $_GET['username'];
        echo "username = $val"."<br/>";
    }
    else{ 
        echo "没有找到username参数"."<br/>";
    } 
?>
