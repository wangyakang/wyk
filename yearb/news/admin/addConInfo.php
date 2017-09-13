<?php
	include "../public/session.php";
	include "../public/db.php";
	$cid=$_GET["pid"];
	$title=$_GET["title"];
	$scon=$_GET["scon"];
//	$username=$_SESSION["username"];
	$url=$_GET["hidden"];
	$sql="insert into shows (cid,title,scon,imgurl) values ('$cid','$title','$scon','$url')";
	$db->query($sql);
	if($db->affected_rows>0){
		$message="添加内容成功";
		$url="addCon.php";
		include "message.php";
	}else{
		$message="添加内容失败";
		$url="addCon.php";
		include "message.php";
	}
?>