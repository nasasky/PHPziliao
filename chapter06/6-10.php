 <?php
 	class customException extends Exception{
 		public function errorMessage(){
 			//定义错误信息的显示格式
 			$errorMsg = $this->getMessage().' is not a valid E-Mail address.';
 			return $errorMsg;
		}
	}
	$email = "someone@example.com";
	try{
		try{
			//检查邮件地址中是否包含字符串“example”
			if(strpos($email, "example") !== FALSE){
 				//如果邮件中包含字符串“example”则抛出异常
 				throw new Exception($email);
 			}
		}
 		catch(Exception $e){
		    //再次抛出异常
 			throw new customException($email);
	    }
	}
	catch (customException $e){
		//捕获异常信息并输出
		echo $e->errorMessage();
	}
?>
