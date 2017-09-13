<?php
	include "db.php";
	$sql="insert into xinxi (name,age,sex) values ('','','')";
	$result=$db->query($sql);
	$id=mysqli_insert_id($db);   //当前插入的id
	if($result){
		echo $id;
	}else{
		echo "插入失败";
	}
