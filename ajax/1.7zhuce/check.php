<?php
	header("Content-Type:text/html;charset=utf8");
	$zhanghao=$_GET["zhanghao"];
	$mysql=new mysqli("localhost","root","","denglu");
	$sql="select * from user where zhanghao='{$zhanghao}'";
	$result=mysqli_query($mysql,$sql);
	$row=mysqli_fetch_array($result);
	if($row){
		echo 0;
	}else{
		echo 1;
	}
?>