<?php
	include "../public/db.php";
	include "../public/session.php";
	include "../public/functions.php";
	$obj=new abc();  //实例化一个构造函数
	$obj->tree(0,1,"category",$db);  //->相当于js调用(.)
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html;charset=UTF-8" />
	<title>Document</title>
	<style>
		form{margin-top:10px;}
	</style>
</head>
<body>
	<form action="addCategoryInfo.php" method="post">
		上级分类：无限极分类
		<select name="pid">			<!-- 通过name属性用于对提交到服务器后的表单数据进行标识 -->  
			<option value="0">一级分类</option>
				<?php
					echo $obj->str;
				?>
		</select></br></br>
添加分类: <input type="text" name="cname" /></br></br>
		<input type="submit" value="提交"/>
	</form>
</body>
</html>