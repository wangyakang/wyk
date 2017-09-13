<?php
	include "../public/db.php";
	include "../public/session.php";
	include "../public/functions.php";
	$cid=$_GET["id"];
	$obj=new abc();
	$obj->delete($cid,"category",$db);
?>