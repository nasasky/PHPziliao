<?php 
	$week = 2;    
	switch ($week) {
        case 1:
		case 2:
		case 3:
		case 4:
		case 5:
			// 当$week 满足值 1、2、3、4、5 中任意一个时，处理方式相同
	        echo "今天是工作日" ;
			break;
	    case 6:
	 	case 7:
	        // 当$week 满足值 6、7 中任意一个时，处理方式相同
	 		echo "今天是休息日" ;
	 		break;
	    }
?>
