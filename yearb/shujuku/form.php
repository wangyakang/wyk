<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html;charset=UTF-8" />
	<title>Document</title>
</head>
<style>
	td,th{
		text-align: center;
	}
	.aa{
		background: #e60;
		font-size: 20px;
		color: #fff;
	}
</style>
<body>
	<table border="1" cellspacing="0" cellpadding="0" width="500px" height="200px" align="center">
		<tr>
			<th>姓名</th>
			<th>年龄</th>
			<th>性别</th>
			<th>操作</th>
		</tr>
		<?php 
			include 'db.php';
			$result=$db->query("select * from xinxi");
			while($row=$result->fetch_assoc()){
		?> 
		<tr>
			<td><?php echo $row["name"]?></td>
			<td><?php echo $row["age"]?></td>
			<td><?php echo $row["sex"]?></td>
			<td>
				<a href="del.php?id=<?php echo $row['id']?>">删除</a>
				<a href="edit.php?id=<?php echo $row['id']?>">编辑</a>
			</td>
		</tr>
		<?php 
			}
		?>
		<tr>
			<td colspan="4"><a href="addin.php?id=<?php echo $row['id']?>" class="aa">添加</a></td>
		</tr>
	</table>
</body>
</html>