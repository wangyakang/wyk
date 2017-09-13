<?php
	include "db.php";
	$id=$_GET["id"];
	$sql="delete from xinxi where id=".$id;
	$result=$db->query($sql);
	if($db->affected_rows>0){
    	echo "ok";
   	}
?>