<?php
	include "db.php";
	$id=$_POST["id"];
	$name=$_POST["name"];
	$age=$_POST["age"];
	$sex=$_POST["sex"];
	$sql="update xinxi set name='$name',age='$age',sex='$sex' where id=".$id;
	$db->query("$sql");
	if($db->affected_rows>0){
    	include "tishi.html";
   	}
?>