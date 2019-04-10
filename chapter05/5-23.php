<?php
 	class dbHelper{
 		private $conn = null;
 		public function __construct(){			
		   //打开一个到 MySQL 服务器的连接
		   $this->conn = mysql_connect("localhost","root","root");
		   echo "得到一个conn<br/>";
		}
	}
	$db1 = new dbHelper();
	$db2 = new dbHelper();
	if($db1 === $db2){
		echo "一个对象<br/>";
	} else {
	   	echo "两个对象<br/>";
	}
?>
