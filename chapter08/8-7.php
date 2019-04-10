<?php
	header('Content-Type:text/html;charset=utf-8');
	if($_SERVER['REQUEST_METHOD']=='POST'){
		echo "姓名：";
		$name=$_POST['name'];
		echo $name."<br>";
		echo "性别：";
		$sex = $_POST['sex'];
		echo $sex."<br>";
		$hobby = $_POST['hobby'];
		echo "爱好：";
		foreach($hobby as $key => $val){
			echo "$val ";
		} 
		exit;
	}
?>
<form action="8-7.php" method="post">
       姓名：
       <input type="text" name="name" /><br/>
       性别:
 		<input type="radio" name="sex" value="女"/>女
 		<input type="radio" name="sex" value="男"/>男<br/>
 	 	爱好:
 	 	<input type="checkbox" name="hobby[]" value="唱歌"/>唱歌
 	 	<input type="checkbox" name="hobby[]" value="跳舞"/>跳舞
 	 	<input type="checkbox" name="hobby[]" value="游泳"/>游泳<br/>
 		<input type="submit" value="提交"/>
</form>
