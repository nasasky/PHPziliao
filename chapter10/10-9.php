<?php
	//编写函数checkUrl()来校验身份证号码格式的合法性
	function checkUrl($url){
  		$url_pattern = "/^(http:\/\/)?[\w]+(\.[\w.\/]+)+$/i";
   		if (preg_match($url_pattern,$url) == 1) {
 			$result = $url."是合法的url地址.<br>";
		} else if (preg_match($url_pattern,$url) == 0) {
 			$result = $url."不是合法的url地址.<br>";
		}
 		echo $result;
	}
	checkUrl('www.baidu.com');
	checkUrl('weibo.com');
	checkUrl('weibo\haha')
?>
