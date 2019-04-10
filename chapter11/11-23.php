<?php
	//定义一个函数统计某个目录下所有文件的大小
	function getDirSize($dirname) {
		$dirsize = 0;//初始化一个大小为0
		$handle = opendir($dirname); 
		//从目录句柄中循环读取条目，并按照系统中的顺序返回目录中下一个文件的文件名.
		while($filename = readdir($handle)){ 
			if($filename != "." && $filename != ".."){
				$file = $dirname . '/' . $filename; 
				//判断给定文件名是否是一个目录
				if(is_dir($file)){
					//如果是一个目录，则调用函数getDirSize()
					$dirsize += getDirSize($file); 
				}else{
					//如果不是目录是一个文件，则取得其大小并且累加到变量$dirsize
					$dirsize += filesize($file);
				}
			}
		}
		closedir($handle);//关闭目录句柄
		return $dirsize;//返回累加的大小
	}
	$dirname = "D:/itcast";//指定要遍历的目录
	echo $dirname."目录中文件的总大小为：".getDirSize($dirname)."B"; 
?>
