<?php
 	class CustomException extends Exception{
 		public function errorMessage(){
 			//定义错误信息的显示格式
 			$errorMsg = 'Error on line '.$this->getLine().' in '.$this->getFile().': <b>'.$this->getMessage().'</b> is not a valid E-Mail address';
 			return $errorMsg;
 		}
 	}
 	$email = "someone@example.com";
	try{
 	    	//检查邮件地址是否合法
	    	if(filter_var($email, FILTER_VALIDATE_EMAIL) === FALSE){
		    //如果不合法抛出异常
			throw new CustomException($email);
 		}
		//检查邮件地址中是否有字符串“example”
		if(strpos($email, "example") !== FALSE){
 			//如果存在则抛出异常
			throw new Exception("$email is an example e-mail");
		}
	}
	catch (CustomException $e){
		//捕获我们自定义的错误类CustomException中抛出的邮件是否合法的异常信息
		echo $e->errorMessage();
	}
	catch(Exception $e){
		//捕获默认错误类Exception中抛出的邮件地址中是否有字符串“example”的异常信息
		echo $e->getMessage();
 	}
?>
