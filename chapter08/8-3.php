<?php
 	header('Content-Type:text/html;charset=utf-8');
 	if($_SERVER['REQUEST_METHOD']=='POST'){
 		echo $_POST['content'].'<br/>';
 		exit;
 	}
?>
 <form action="8-3.php" method="post">
 	留言内容:<textarea name="content"></textarea><br/>
 	<input type="submit" value="留言">
</form>
