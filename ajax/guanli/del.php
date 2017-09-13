<?php
	hearder("Content-Type:text/html;charset=utf8");
	$mysql=new mysqli("localhost","root","","");
	$id=$_GET["id"];
	$sql="delete from student where id='{$id}'";
	$result=mysqli_query($mysql,$sql);
//	echo $result;  //返回影响的行数的位置，地表删除可成功
?>