<?php
    header('Content-Type:text/html;charset=utf-8');
    if($_SERVER['REQUEST_METHOD']=='POST'){
        if(!isset($_POST['name'])){
            echo '必须输入转账人员!';
            exit;
        }
        if(empty($_POST['amount'])){
			echo '必须输入非0的转账金额!';
            exit;
        }
        if(!is_numeric($_POST['amount'])){
            echo '转账金额必须是数字!';
            exit;
        }
        echo '转账'.$_POST['amount'].'元给'.$_POST['name'];
        exit;
    }
?>
<form action="8-5.php" method="post">
    转账：<input type="text" name="amount">给<input type="text" name="name"><br/>
    <input type="submit" value="转出">
</form>
