<?php
	include "db.php";
	$result=$db->query("select * from xinxi");
	while($row=$result->fetch_assoc()){
		$array[]=$row;
	}
	echo json_encode($array);
