<?php
	// 图像处理类,命名为Image.class.php
	class Image{
 		private $thumbPrefix = 'thumb_'; //缩略图前缀
		private $waterPrefix = 'water_'; //水印图片前缀
		//图片类型和对应创建画布资源的函数名
		private $from = array(
			'image/gif'  => 'imagecreatefromgif',
			'image/png'  => 'imagecreatefrompng',
			'image/jpeg' => 'imagecreatefromjpeg'
		);
		//图片类型和对应生成图片的函数名
		private $to = array(
			'image/gif'  => 'imagegif',
			'image/png'  => 'imagepng',
			'image/jpeg' => 'imagejpeg'
		);
		/**
		 * 添加水印功能
		 * @access public
		 * @param $image string 源图片
		 * @param $water string 水印图片
		 * @param $postion number 添加水印位置，默认9，右下角
		 * @param $path string 水印图片存放路径,默认为空，表示在当前目录
		 * @return 
		 */
		public function watermark($image,$water,$postion = 1,$path = ''){
			//获取源图和水印图片信息
			$dst_info = getimagesize($image);
			$water_info = getimagesize($water);
			$dst_w = $dst_info[0];
			$dst_h = $dst_info[1];
			$src_w = $water_info[0];
			$src_h = $water_info[1];
			//获取各图片对应的创建函数名
			$dst_create_fname = $this->from[$dst_info['mime']];
			$src_create_fname = $this->from[$water_info['mime']];
			//使用可变函数来创建画布资源
			$dst_img = $dst_create_fname($image); 
			$src_img = $src_create_fname($water);
			//水印位置
			switch ($postion) {			
				case 1: //左上
					$dst_x = 0;
					$dst_y = 0;
					break;	
				case 2: //右上
					$dst_x = $dst_w - $src_w;
					$dst_y = 0;
					break;	
				case 3: //中中
					$dst_x = ($dst_w - $src_w)/2;
					$dst_y = ($dst_h - $src_h)/2;
					break;	
				case 4: //下左
					$dst_x = 0;
					$dst_y = $dst_h - $src_h;
					break;	
				default: //下右
					$dst_x = $dst_w - $src_w;
					$dst_y = $dst_h - $src_h;
					break;	
			}
			//将水印图片添加到目标图标上
			imagecopy($dst_img, $src_img, $dst_x, $dst_y, 0, 0, $src_w, $src_h);
			//生成带水印的图片
			$waterfile = $path . $this->waterPrefix . $image;
			$generate_fname = $this->to[$dst_info['mime']];		
			if ($generate_fname($dst_img,$waterfile)){
				return $waterfile;
			} else {
				return false;
			}
		}	
	}
?>
