<?php
	haader("Content-Type:text/html;charset=utf8");
	$zhanghao=$_GET["zhanghao"];
	$pass=$_GET["pass"];
	echo $zhanghao,$pass;
	$mysql=new mysqli("localhost","root","","denglu");
	$sql="insert into user (zhanghao,pass) values('{$zhanghao}','{$pass}')";
	$result=mysqli_query($mysql,$sql);
	if($result==1){
		echo 1;
	}else{
		echo 0;
	};
	print_r($result);
?>