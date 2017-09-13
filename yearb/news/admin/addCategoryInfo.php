<?php
	include "../public/db.php";
	include "../public/session.php";
	$pid=$_POST["pid"];
	$cname=$_POST["cname"];
	$sql="insert into category (cname,pid) values ('$cname','$pid')";
	$db->query($sql);
	if($db->affected_rows>0){
		$message="添加分类成功！";
		$url="addCategory.php";
		include "message.php";
		exit;
	}
?>