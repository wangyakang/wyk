<?php
	include "../public/db.php";
	include "../public/session.php";
	include "../public/functions.php";
	$sid=$_GET["id"];
	$currentid=$_GET["cid"];
	$obj=new abc();
	$obj->tables(0,1,"category",$db,$currentid);
	$sql="select * from shows where sid=".$sid;
	$result=$db->query($sql);
	$row=$result->fetch_assoc();
?>
<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8" />
	<title>Document</title>
	<script src="../js/upload.js"></script>
	<style>
		.box{
			width:250px;
			height:250px;
			border:1px solid #000;
			position:relative;
		}
		.img{
			position:absolute;
			left:0;
			top:0;
			width:100%;
			height:220px;
		}
		img{
			width:100%;
			height:100%;
		}
		.progress{
			position:absolute;
			bottom:0;
			left:0;
			width:0%;
			height:30px;
			background:red;
		}
	</style>
	<script type="text/javascript">
		window.onload=function(){
			var btn=document.querySelector(".btn");
			var hiddenIput=document.querySelector("#hidden");
			var obj=new upload("upload.php",".file",".progress",".img img");
			obj.up(function(e){
				hiddenIput.setAttribute("value",e);
				btn.removeAttribute("disabled");
			})
			obj.loadstart=function(){
				btn.setAttribute("disabled","disabled");
			}
		}
	</script>
</head>
<body>
	<form action="updateConInfo.php?id=<?php echo $sid ?>" method="post">
		上级分类：<select name="pid">
					<option value="0">一级分类</option>
					<?php 
						echo $obj->str;
					 ?>
			</select><br/><br/>
		修改标题：<input type="text" name="title" value="<?php echo $row["title"] ?>" /><br/>
		修改内容：<br/><textarea name="scon" rows="" cols=""><?php echo $row["scon"] ?></textarea><br/><br/>
		<input type="file" name="file" value="" multiple="multiple" class="file"/>
		<input type="hidden" name="hidden" id="hidden" value="" />
		<div class="box">
				<div class="img">
					<img src="" alt="" />
				</div>
				<div class="progress"></div>
			</div></br></br>
			<input type="submit" name="" value="修改内容" class="btn"/>
	</form>
</body>
</html>