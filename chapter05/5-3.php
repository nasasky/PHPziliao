<?php 
	class Person {
 		private $name;  
 		private $age;   
		//定义getName()和setName()方法用于获取和设置$name属性
		public  function getName()
		{
			return $this->name;
		} 
		public function setName($value)
		{
			$this->name=$value;
		}
		//定义getAge()和setAge()方法用于获取和设置$age属性
		public function getAge()
		{
			return $this->age;
		} 
		public  function setAge($value)
		{
			if($value<0){
				echo "年龄不合法<br>";
			}else{
				$this->age=$value;
			}
		}
	}
	$p1=new Person();
	$p1->setName("张华");
	$p1->setAge(-10); 
	echo "姓名：".$p1->getName()."<br>";
 	echo "年龄：".$p1->getAge(); 
?>
