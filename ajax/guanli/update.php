<?php
	hearder("Content-Type:text/html;charset=utf8");
	$mysql=new mysqli("localhost","root","","");
	$id=$_GET["id"];
	$ziduan=$_GET["type"];
	$value=$_GET["value"];
	$sql="update student set {$ziduan}='{$value}' where id='{$id}'";//前面字段不加引号
	$result=mysqli_query($mysql,$sql);  //返回操作的行数
//	echo $result;
?>