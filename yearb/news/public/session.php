<?php
	session_start();   //接口，不登录就进不来
	if(!isset($_SESSION["is_login"])){     //判断
		$message="请登录！";
		$url="login.php";
		include "message.php";
	}
?>