<?php
	include "db.php";
	$name=$_GET["name"];
	$age=$_GET["age"];
	$sex=$_GET["sex"];
	$db->query("insert into xinxi (name,age,sex) values ('$name','$age','$sex')");
//	$db->query('insert into xinxi (name,sex,age) values ("$name","$age","$sex")');
	if($db->affected_rows>0){
     	include "tishi.html";
 	}
?>