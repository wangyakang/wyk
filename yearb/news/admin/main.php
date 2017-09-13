<?php
	include "../public/session.php";
?>
<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8" />
	<title>内容管理系统</title>
	<script src="../js/jquery.min.js"></script>
</head>
<style>
	*{
		box-sizing: border-box;
		font-family: "微软雅黑";
		list-style: none;
	}
	html,body{
		width:100%;
		height:100%;
		padding: 0;
		margin: 0;
	}
	.header{
		width: 100%;
   		background-color: #234686;
	    padding: 20px 0;
	    margin: 0 auto;
	    color:#fff;
	    text-align: center;
	    letter-spacing: 1px;
	}
	.main{
		width: 100%;
	    margin: 0 auto;
	    position: relative;
	}
	.left{
		width: 15%;
	    text-align: center;
	    float: left;
	    background-color: #e1e7f5;
	    height: 680px;
	}
	.service{
		height: 60px;
	    background-color: #b5d6f9;
	    padding-top: 15px;
	}
	h5{
		color: #fff;
	    background-color: #3399fe;
	    font-size: 18px;
	    border-radius: 10px;
	    margin: 0 20px;
	    padding: 4px 15px;
	    height: 30px;
	    line-height: 21px;
	}
	.right{
	    width: 85%;
	    height: 680px;
	    position: absolute;
	    left: 15%;
	    background-color: #f8f8f8;
	}
	.opt{
		cursor: pointer;
		line-height: 37px;
   		background-color: #d5dbe9;
	}
	.out{
		font-size: 16px;
	    color: white;
	    text-align: right;
	    display: block;
	    margin-right: 38px;
	}
	iframe{
		width:100%;
		height:100%;
	}
	a{
		text-decoration: none;
	}
</style>
<body>
	<div class="header">
		<h1><!--<?php echo $_SESSION["username"] ?>-->欢迎来到内容管理系统</h1>
		<a href="out.php" class="out">退出</a>
	</div>
	<div class="main">
		<div class="left">
			<div class="service">
				<h5>管理中心</h5>
			</div>
			<ul class="menu">
				<li class="opt first">
					用户管理
					<ul class="son" style="display:none">
						<li><a href="" target="right">添加用户</a></li>
						<li><a href="" target="right">管理用户</a></li>
					</ul>
				</li>
				<li class="opt">
					分类管理
					<ul class="son" style="display:none">
						<li><a href="addCategory.php" target="right">添加分类</a></li>
						<li><a href="showCategory.php" target="right">管理分类</a></li>
					</ul>
				</li>
				<li class="opt">
					内容管理
					<ul class="son" style="display:none">
						<li><a href="addCon.php" target="right">添加内容</a></li>
						<li><a href="showCon.php" target="right">管理内容</a></li>
					</ul>
				</li>
			</ul>
		</div>
		<div class="right">
			<iframe src="" frameborder="0" name="right"></iframe>
		</div>
	</div>
</body>
<script>
	$(function(){
		$(".opt").click(function(){
			$(this).find(".son").slideToggle();
		})
		//阻止a向上冒泡
		$("a").click(function(event){
			event.stopPropagation();
		})
	})
</script>
</html>