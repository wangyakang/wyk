<?php
	//数组将所有数据存储,关联数组$arr=array("name"=>"list","age"=>"40")
	$arr=array(
		array("text"=>"爱马仕","src"=>"bt8.jpg"),
		array("text"=>"爱马仕","src"=>"bt8.jpg"),
		array("text"=>"杰克琼斯","src"=>"bt2.jpg"),
		array("text"=>"耐克","src"=>"bt7.jpg"),
	);
	$n=$_GET["n"];    //接收n
//	echo $n;   //判断是否接收
	print_r(JSON_encode ($arr[$n]));
?>