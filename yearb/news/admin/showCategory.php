<?php
	include "../public/db.php";
	include "../public/session.php";
	include "../public/functions.php";
	$obj=new abc();
	$obj->table(0,1,"category",$db);
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html;charset=UTF-8" />
	<title>信息展示</title>
</head>
<style>
	body{
		margin:0;
		padding:0;
	}
	table{
		width:600px;
		margin:35px auto;
		border:1px solid #000;
		border-collapse: collapse;
	}
	tr{
		width:100%;
		height:30px;
		line-height: 30px;	
	}
	th,td{
		width:150px;
		border:1px solid #000;
		text-align:center;
	}
	a{
		text-decoration: none;
	}
</style>
<body>
	<table>
		<tr>
			<th>cid</th>
			<th>分类名称</th>
			<th>父pid</th>
			<th>操作</th>
		</tr>
		<?php
			echo $obj->str;
		?>
	</table>
</body>
</html>