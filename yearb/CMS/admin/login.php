<!--
//	session_star(); //开启
//	$_SESSION["ok"]="yes";
//	//其他页面访问开启session，之前不能有任何输出-->
<?php
//	echo md5("");  //加密方式
?>
<html>
	<head>
		<title></title>

    </head>	<style>
		.box{
			width: 400px;height: 250px;
			position: fixed;
			left: 0;right: 0;top: 0;bottom: 0;
			margin: auto;
			text-align: center;
			border: 1px solid #666666;
		}
	</style>
	<body>
		<div class="box">
			<h3>登录页</h3>
			<form action="denglu.php" method="post">
				用户名：<input type="text" name="username" autocomplete="off"/> <br /><br />
				密码：<input type="password" name="password"/><br /><br />
				<input type="submit" name="" id="" value="登录"/><br /><br />
				
			</form>
			没有用户名，请<a href="reg.php">点击注册</a>
		</div>
	</body>
</html>