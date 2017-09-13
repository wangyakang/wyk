<?php
	include "../public/session.php";
	include "../public/db.php";
	include "../public/functions.php";
	$sid=$_GET["id"];
	$sql="delete from shows where sid=".$sid;
	$db->query($sql);
	if($db->affected_rows>0){
		$message="删除成功！";
		$url="showCon.php";
		include "message.php";
		exit;
	}else{
		$message="删除失败！";
		$url="showCon.php";
		include "message.php";
		exit;
	}
?>