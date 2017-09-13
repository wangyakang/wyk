<?php
	include "../public/db.php";
	include "../public/session.php";
	$fileInfo=$_FILES["file"];
	date_default_timezone_set('PRC');  //设定用于一个脚本中所有日期时间函数的默认时区
	//echo date("Y-m-d his");
	$dirName=date("Ymd");//创建文件夹名字
	//echo $dirName;
	$imgName=date("Ymdhis");//创建图片名字
	//echo $imgName;
	if(!file_exists("upload")){     
		mkdir("upload",0777,true);
	}
	if(!file_exists("upload/".$dirName)){
		mkdir("upload/".$dirName,0777,true);
	}
	if(is_uploaded_file($fileInfo["tmp_name"])){
		$path="upload/".$dirName."/".$imgName.$fileInfo["name"];
		move_uploaded_file($fileInfo["tmp_name"],$path);
	}
	echo "http://localhost/news/upload/".$dirName."/".$imgName.$fileInfo["name"];
	/* 把时间调到北京时间,php5默认为格林威治标准时间
	 * 在页头使用date_default_timezone_set()设置我的默认时区为北京时间
	 * date_default_timezone_set('PRC');
	 * echo date('Y-m-d H:i:s');
	 * 时间和服务器当前时间一样了!!
	 * 
	 * 递归创建文件夹
	 * 利用日期函数创建文件夹名称(年月日)和图片名称(时分秒)
	 * 放置图片的根文件夹——文件夹——图片
	 * 
	 * 
	 */
?>