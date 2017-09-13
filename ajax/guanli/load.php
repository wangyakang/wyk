<?php
//	hearder("Content-Type:text/html;charset=utf8");
//	$mysql=new mysqli("localhost","root","","student");
//	$sql="select * from xinxi";
//	mysqli_query($mysql,"set names utf8");  //设置名字
//	//获取的obj代表表格的一行，键值代表单元格
//	$result=mysqli_query($mysql,$sql);
//	$row=mysqli_fetch_all($result,MYSQL_NUM);   //第二个参数确定显示参数的形式NUM：索引数组   ASSOC显示关联数组  BOTH:所有形式都显示
//	print_r($result);   //输出获取的数据库中的值
//	//将数组转化为索引json格式
//	$res=JSON_encode($row);
//	print_r($res);
	header("Content_Type:text/html;charset=utf8");
	$mysql = new mysqli("localhost","root","","student");
	mysqli_query($mysql,"set names utf8");
	$sql = "select * from xinxi";
	$result = mysqli_query($mysql,$sql);
	$row = mysqli_fetch_all($result,MYSQL_ASSOC);
	$dow = JSON_encode($row);
	print_r($dow);
?>