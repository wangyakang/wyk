<?php
	header("Content-Type:text/html;charset=utf8");
	$zhanghao=$_GET["zhanghao"];
	$pass=$_GET["pass"];
	echo $zhanghao,$pass;
	$mysql=new mysqli("localhost","root","","denglu"); //连接数据库 (域名、账号、密码、数据库)
	$sql="select * from user where zhanghao='{$zhanghao}'";
	$result=mysqli_query($mysql,$sql);    //专门执行select语句的函数,并将查询结果保存在result
	//用函数去执行Sql查询语句，输出数组对象形式
	$row=mysqli_fetch_array($result);//内置函数，将结果集  的第一行转化为数组，查询失败返回空
//	print_r ($row);
	if($row){
		if($row["pass"]==$pass){
			echo"登陆成功";
		}else{
			echo"密码错误";
		}
	}else{
		echo"账号不存在,请注册 ";
	}
//	print_r($result)  //所有HTTP请求都会在nextwork显示
//	var_dump($result)     //输出类型及结构
//	echo$zhanghao,$pass;    //只能输出字符串形式
//	
	
	//php的数组形式：索引数组[0]、关联数组[id]
?>