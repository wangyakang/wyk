<?php
//	header("Content-Type:text/xml;charset=utf8");
//	$zhanghao=$_GET["zhanghao"] ; //声明变量$开头
//	$pass=$_GET["pass"];
//	echo $zhanghao; //与document.write相似,在每一行后都要加分号
//	echo $pass;
//	if($zhanghao=="admin"){
//		if($pass=="123456"){
//			echo"登陆成功";
//		}else{
//			echo"密码错误";
//		}
//	}else{
//		echo"账号不存在";
//	}
//$zhanghao=$_GET['zhanghao'];
//echo $zhanghao;


//请求试验
   $zhanghao=$_GET["aa"];
   $mima=$_GET["cc"];
// $mima=$_POST["cc"];
   echo $zhanghao,$mima;
   
   $xml= '<?xml version="1.0" encoding="utf8"?>
   	 <clothes>
   	 	<header>
   	 		你好
   	 	</header>
   	 	<foot>
   	 		前端
   	 	</foot>
   	 </clothes>
   	 ;'
   	 echo $xml
   	 
   	 //php中的if判断语句中的一个等号不表示赋值代表比较，两个等号相当于html的三个等号
?>