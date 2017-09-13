<?php
	include "../public/db.php";
	include "../public/session.php";
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
		width:1200px;
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
			<th>sid</th>
			<th>标题</th>
			<th>内容</th>
			<th>cid</th>
			<th>时间</th>
			<th>作者</th>
			<th>图片</th>
			<th>操作</th>
		</tr>
		<?php
			$sql="select * from shows";
			$result=$db->query($sql);
			while($row=$result->fetch_assoc()){
		?>
			<tr>
				<td><?php echo $row["sid"] ?></td>
				<td><?php echo $row["title"] ?></td>
				<td><?php echo $row["scon"] ?></td>
				<td><?php echo $row["cid"] ?></td>
				<td><?php echo $row["stime"] ?></td>
				<td><?php echo $row["username"] ?></td>
				<td><?php echo $row["imgurl"] ?></td>
				<td><a href="delCon.php?id=<?php echo $row["sid"] ?>">删除</a> <a href="updateCon.php?id=<?php echo $row["sid"] ?>&cid=<?php echo $row["cid"] ?>">编辑</a></td>
			</tr>
		<?php
			}
		?>
	</table>
</body>
</html>