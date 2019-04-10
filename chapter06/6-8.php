<?php
 	//创建一个自定义的异常类CustomException，继承自Exception
 	class CustomException extends Exception{
 		//定义错误方法errorMessage
 		public function errorMessage(){
 			//定义错误信息显示格式
 			$errorMsg = 'Error on line '.$this->getLine().' in '.$this->getFile().':<b>'.$this->getMessage().'</b> is not a valid E-Mail address';
 			return $errorMsg;
		}
	}
 	$email = "someone@example...com";
 	try{
		//检查邮件地址格式是否合法
		if(filter_var($email, FILTER_VALIDATE_EMAIL) === FALSE){
 			//如果邮件地址不合法，则抛出异常
			throw new CustomException($email);
		}
	}
 	catch (CustomException $e){
 		//输出错误信息
 		echo $e->errorMessage();
 	}
?>
