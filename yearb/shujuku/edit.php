<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html;charset=UTF-8" />
	<title>Document</title>
</head>
<body>
	<?php
	include "db.php";
	$id=$_GET["id"];   //通过不同的id进行编辑
	$result=$db->query("select * from xinxi where id=".$id);	
	$row=$result->fetch_assoc();
	?>
	<form method="post" action="editin.php">
		
		姓名：<input type="text" name="name" value='<?php echo $row["name"]?>'/> <br /><br />
		年龄：<input type="text" name="age" value='<?php echo $row["age"]?>'/> <br /><br />
		性别：
			男<lable><input type="radio" name="sex" id="" value="男" <?php if($row["sex"]="男"){?> checked <?php }?> /></lable>
			女<input type="radio" name="sex" value="女" <?php if($row["sex"]=="女"){?> checked <?php }?>/><br /><br />
		<input type="submit" name="" id="" value="修改信息" />
		<input type="hidden" name='id' value='<?php echo $row["id"] ?>'/> 
	</form>
</body>
</html>