<?php
	include "../public/db.php";
	include "../public/session.php";
	$sql="select * from category where pid=0";
	$result=$db->query($sql);
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title></title>
		<link rel="stylesheet" href="../static/css/header.css" />
		<link rel="stylesheet" href="../static/css/common.css" />
		<script src="../static/js/jquery.min.js"></script>
	</head>
	<body>
		<div class="header">
		<div class="head-tab">
			<img src="../static/img/head/01.png" alt="">
			<div class="head-right">
				<span>
					您好，请先
					<a href="">登录</a>
				</span>
				<s>|</s>
				<a href="">中文</a>
				<s>|</s>
				<a href="">English</a>
			</div>
		</div>
	</div>
	<!-- 导航 -->
	<div class="head-bg">
		<div class="nav">
			<p class="imgs">
				<img src="../static/img/head/logo.png" alt="">
			</p>
			<ul class="nav-right">
				<li>
					<a href="" class="first">首页</a>
				</li>
				<?php
					while($row=$result->fetch_assoc()){
				?>
				<li class="dh">
					<a href="" class="dhz"><?php echo $row["cname"] ?></a>
				</li>
				<?php		
					}
				?>
			</ul>
		</div>
	</div>
