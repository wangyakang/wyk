<?php
	include "db.php";
	$id=$_GET["id"];
	$type=$_GET["type"];
	$value=$_GET["value"];
	$result=$db->query("update xinxi set $type='$value' where id=".$id);
	if($db->affected_rows>0){
		echo "ok";
	}
