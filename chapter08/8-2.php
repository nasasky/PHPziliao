<?php
	header("Content-Type:text/html; charset=utf-8");
	if ($_SERVER['REQUEST_METHOD']=='POST'){
		$username    = $_POST['username'];
		$password    = $_POST['password'];
		$gender      = $_POST['gender'];
		$interest    = $_POST['interest'];
		echo "用户：" . $username ."<br />"; 
		echo "密码：" . $password ."<br />";  
   		echo "性别：" . $gender ."<br />"; 
		echo "爱好：" . implode('、',$interest) ."<br />";
		exit;
	}
?>
<form action="8-2.php" method="POST" enctype="multipart/form-data">
	<p>
		<label for="">用&nbsp;&nbsp&nbsp;户：&nbsp;&nbsp;</label> 
		<input type="text" name="username" />
	</p>			
	<p>
		 <label for="">密&nbsp;&nbsp;&nbsp;码：&nbsp;&nbsp;</label> 
		 <input type="password"  name="password" />
	</p>			 
	<p>
		 <label for="">确认密码：</label>
		 <input type="password" name="repassword" />
	</p>			 
	<p>
		  <label for="">性别：</label>
		  <input type="radio" name="gender" value="男" /> 男
		  <input type="radio" name="gender" value="女"checked="checked" /> 女
	</p>	
	<p>
		   <label for="">兴趣爱好：</label>
		   <input type="checkbox" name="interest[]" value="弹琴" /> 弹琴
		   <input type="checkbox" name="interest[]" value="下棋" /> 下棋
		   <input type="checkbox" name="interest[]" value="书法" /> 书法
		   <input type="checkbox" name="interest[]" value="绘画" /> 绘画
	</p>
	<input type="submit" name="submit" value="注册" class="login_btn" />
</form>
