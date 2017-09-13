<?php
	session_start();
	include "../public/db.php";
	$username=$_POST["username"];
	$password=md5($_POST["password"]);
	$sql="select * from user";
	$result=$db->query($sql);
	while($row=$result->fetch_assoc()){
		if($row["username"]==$username){
			if($row["password"]==$password){
					$message="登录成功！";
					$url="main.php";
					$_SESSION["is_login"]="yes";
					include "message.php";
					exit;
				}
			}
	}
	$message="登录失败";
	$url="login.php";
	include "message.php";
?>