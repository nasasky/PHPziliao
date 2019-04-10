<?php
    header('Content-Type:text/html;charset=utf-8');
    define('ROOT_PATH',dirname(__FILE__));
    //定义一个函数用于下载
    function downfile($file_path){
    	//判断文件是否存在
	    $file_path = iconv('utf-8','gb2312',$file_path);//对可能出现的中文名称进行转码
	    if (!file_exists($file_path)){
		    exit('文件不存在!');
	    }
	    $file_name = basename($file_path); //获取文件名称
	    $file_size = filesize($file_path); //获取文件大小
		$fp = fopen($file_path,'r');        //以只读的方式打开文件
	    header("Content-type: application/octet-stream");
	    header("Content-Disposition: attachment;filename={$file_name}");
	    $buffer = 1024;
	    $file_count = 0;
	    //判断文件是否结束
    	while (!feof($fp) && ($file_size - $file_count > 0)){
	    	$file_data = fread($fp,$buffer);
		    $file_count += $buffer;
		    echo $file_data;
	    }
	    fclose($fp); //关闭文件
    }
    //调用实例
    downfile(ROOT_PATH . "./uploads/hello.txt");
?>
