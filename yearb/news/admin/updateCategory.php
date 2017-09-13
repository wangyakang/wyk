<?php
	include "../public/db.php";
	include "../public/session.php";
	include "../public/functions.php";
	$currentid=$_GET["id"];
	$obj=new abc();  //实例化一个构造函数
	$obj->tree(0,1,"category",$db,$currentid);  //->相当于js调用(.)
	$sql="select * from category where cid=".$currentid;
	$result=$db->query($sql);
	$row=$result->fetch_assoc();
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html;charset=UTF-8" />
	<title>修改信息</title>
	<style>
		form{margin-top:10px;}
	</style>
</head>
<body>
	<form action="updateCategoryInfo.php?id=<?php echo $row["cid"]; ?>" method="post">
		修改上级分类
		<select name="pid">			<!-- 通过name属性用于对提交到服务器后的表单数据进行标识 -->  
			<option value="0">一级分类</option>
				<?php
					echo $obj->str;
				?>
		</select></br></br>
修改分类: <input type="text" name="cname" value="<?php echo $row["cname"];?>"/></br></br>
		<input type="submit" value="提交"/>
	</form>
</body>
</html>