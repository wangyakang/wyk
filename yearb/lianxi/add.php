<?php
	include "db.php";
	$result=$db->query("insert into xinxi (name,age,sex) values ('','','')");
	$id=mysqli_insert_id($db);
	if($db->affected_rows>0){
		echo $id;
	}
