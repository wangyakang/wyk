<?php
	$db=new mysqli("localhost","root","","student");
	$db->query("set names utf8");
	$result=$db->query("select * from xinxi");
	$str="<table>";
	while($row=$result->fetch_assoc()){
//		var_dump($row)
		$str.="<tr>";
			$str.="<td>".$row["name"]."</td>";
			$str.="<td>".$row["age"]."</td>";
			$str.="<td>".$row["sex"]."</td>";
		$str.="</tr>";
	}
	$str.="</table>";
	echo $str;
?>