<?php
	include "../public/db.php";
	include "../public/session.php";
	$img=$_POST["hidden"];
	$sid=$_GET["id"];
	$cid=$_POST["pid"];
	$title=$_POST["title"];
	$scon=$_POST["scon"];
	$sql="update shows set title='$title',scon='$scon',cid='$cid',imgurl='$img' where sid=".$sid;
	$db->query($sql);
	if($db->affected_rows>0){
		$message="修改成功！";
		$url="showCon.php";
		include "message.php";
		exit;
	}else{
		$message="修改失败！";
		$url="showCon.php";
		include "message.php";
		exit;
	}

?>