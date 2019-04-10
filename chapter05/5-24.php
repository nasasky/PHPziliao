<?php
	class dbHelper{
		private static $instance = null;//定义一个私有的静态属性$instance
		//声明一个构造方法	
		private function __construct(){
			$this->conn = mysql_connect("localhost","root","root");
			echo "得到一个conn<br/>";
		}
		//只有通过这个方法才能返回本类的对象，该方法是静态方法
		public static function getInstance(){
			//如果本类中的$instance为空，说明它还没有被实例化过
			if(self::$instance == null){
				self::$instance = new self();//实例化本类对象
			}
			return self::$instance;//返回本类的对象
		}
		//阻止用户复制对象实例
		public function __clone(){
		}
	}
	$db1 = dbHelper::getInstance();
	$db2 = dbHelper::getInstance();
	if($db1 === $db2){
		echo "同一个对象";
	}else{
		echo "不是同一个对象";
	}
?>

