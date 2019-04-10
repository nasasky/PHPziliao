<?php
    //判断文件上传到临时目录是否会出错，如果出错则输出错误信息并退出
    if ($_FILES['userfile']['error'] > 0){
	    $error_msg = '上传错误:';
	    switch ($_FILES['userfile']['error']) {
	    	case 1:
		    	$error_msg .= "文件大小超出了php.ini中upload_max_filesize的值";
		    break;
		    case 2:
			    $error_msg .= "文件的大小超出了表单中max_file_size选项指定的值";
			    break;
		    case 3:
			    $error_msg .= "文件只有部分被上传";
			    break;
		    case 4:
			    $error_msg .= "没有文件被上传";
			    break;
			case 6:
				$error_msg .= "找不到临时文件夹";
			    break;
			case 7:
				$error_msg .= "文件写入失败";
				break;
			default:
				$error_msg .= "未知错误";
				break;
		}
		echo $error_msg;
		exit;
	}
	//上传到临时目录成功,将其复制到脚本文件所在的uploads文件夹中
	$destination = 'uploads/'. $_FILES['userfile']['name']; //目标文件
	if (is_uploaded_file($_FILES['userfile']['tmp_name'])){
		if (move_uploaded_file($_FILES['userfile']['tmp_name'], $destination)){
			echo "上传成功";
		}
	}
?>
