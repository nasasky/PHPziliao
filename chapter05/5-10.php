<?php
 	class Student{
 	 	//定义show()方法,输出学生的学校名称
 		public static $schoolName="传智播客";
 	 	public static function show (){
 			echo "我的学校是：".self::$schoolName;
 	 	}
 	}
 	Student::show();
?>
