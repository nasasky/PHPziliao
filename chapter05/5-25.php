<?php
 	header('Content-Type: textml;charset=utf-8');
 	class Db{
 		//工厂方法
 		public static function factory($type){
		   if (include_once  $type . '.php') {
				$classname =  $type;
				return new $classname();
		   } else {
				echo "出错了!";
		   }
		}
	}
	//获取MySQL驱动对象
	$mysql = Db::factory('MySQL');
 	//获取SQLite驱动对象
	$sqlite = Db::factory('SQLite');
	var_dump($mysql);
	var_dump($sqlite);
?>  
