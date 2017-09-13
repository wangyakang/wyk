<?php
	include "db.php";
	$id=$_GET["id"];
	$ziduan=$_GET["type"];
	$value=$_GET["value"];
	$sql="update xinxi set {$ziduan}='{$value}' where id=".$id;//前面字段不加引号
	$result=$db->query($sql);  //返回操作的行数
	echo $db->affected_rows;
?>