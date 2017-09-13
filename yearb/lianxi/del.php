<?php
	include "db.php";
	$id=$_GET["id"];
	$result=$db->query("delete from xinxi where id=".$id);
	if($db->affected_rows>0){
		echo "ok";
	}
