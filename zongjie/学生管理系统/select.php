<?php
	include "db.php";
	$sql="select * from xinxi";
	$result=$db->query($sql);
	while($row=$result->fetch_assoc()){
//		var_dump("<pre>");
		$array[]=($row);
	}
	echo json_encode($array);
//	$arr=array();
//	$arr[]=1;   //php中数组小标自动累加 
//	
//	json_encode()    //输出类似js中json格式的代码
?>