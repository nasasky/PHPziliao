<?php
	class Student{
		//定义show()方法,输出学生的学校名称
		public static $SchoolName="传智播客";
		public  function show (){
			echo "我的学校是：".self::$SchoolName."<br>";
		}
	}
	$stu1=new Student();
	$stu2=new Student();
	echo "学生1：<br>";
	$stu1->show();
	echo "学生2：<br>";
	$stu2->show();
 ?>
