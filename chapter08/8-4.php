<?php
 	header('Content-Type:text/html;charset=utf-8');
 	if($_SERVER['REQUEST_METHOD']=='POST'){
		echo "<pre>";
		echo htmlentities($_POST['content'],ENT_NOQUOTES,'UTF-8').'<br/>';
		echo strip_tags($_POST['content']).'<br/>';
		echo "<pre>";
		exit;
 	}
?>
<form action="8-4.php" method="post">
 	留言内容:<textarea name="content"></textarea><br/>
 	<input type="submit" value="留言">
</form>
