<?php
	hearder("Content-Type:text/html;charset=utf8");
	$mysql=new mysqli("localhost","root","","student");
	$sql="insert into xinxi (num,name,sex,age) values ('','','','')";
	$result=mysqli_query($mysql,$sql);
	$id=mysqli_insert_id($mysql);    //将本次插入的id返回（自动增长的主键）
	if($result){
		echo $id;
	}else{
		echo "插入失败";
	}
?>