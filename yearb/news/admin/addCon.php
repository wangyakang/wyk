<?php
	include "../public/db.php";
	include "../public/session.php";
	include "../public/functions.php";
	$obj=new abc();
	$obj->tree(0,1,"category",$db);
?>
<html>
	<head>
		<title>添加内容</title>
	</head>
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
	<script>
		window.onload=function(){
			var btn=document.querySelector(".btn");
			var hiddenIput=document.querySelector("#hidden");
			var obj=new upload("upload.php",".file",".progress",".img img");
			obj.up(function(e){
//				alert(1)
				hiddenIput.setAttribute("value",e);
				btn.removeAttribute("disabled");
			})
			obj.loadstart=function(){
				btn.setAttribute("disabled","disabled");
			}
		}
	</script>
	<body>
		<form action="addConInfo.php">
			所属分类：
			<select name="pid" id="">
				<option value="0">一级分类</option>
				<?php
					echo $obj->str;
				?>
			</select></br></br>
			标题：<input type="text" name="title" /></br></br>   
			内容：<textarea name="scon" id="" cols="30" rows="10"></textarea></br></br>
			<input type="file" name="file" class="file" multiple="multiple" /></br></br>
			<input type="hidden" name="hidden" id="hidden" value="" />
			<div class="box">
				<div class="img">
					<img src="" alt="" />
				</div>
				<div class="progress"></div>
			</div></br></br>
			<input type="submit" name="" value="添加内容" class="btn"/>
		</form>
	</body>
</html>