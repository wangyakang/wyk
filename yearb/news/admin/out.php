<?php
	include "../public/session.php";
	include "../public/db.php";
	unset($_SESSION["is_login"]);
	unset($_SESSION["username"]);
	$message="请登录！";
	$url="login.php";
	include "message.php";
?>