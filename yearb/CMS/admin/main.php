<?php
    session_start();
    $_SESSION["username"];
    if(!isset($_SESSION["is_login"])){    //isset判断属性是否存在
        $url="login.php";
        $message="请登录";
        include "tishi.php";
        exit;
    }
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html;charset=UTF-8" />
	<title>后台管理系统</title>
</head>
<style>
	html,body{
		width: 100%;height: 100%;
		padding: 0;margin: 0;
	}
	h1{
		text-align: center;
		margin: auto;
        margin-top: 3%;
	}
	.header{
		width: 100%;height: 20%;
		border-bottom: 2px solid #000000;
	}
	.main{
		width: 100%;height: 80%;
	}
	.left{
		width: 20%;height: 100%;
		float: left;
	}
	.right{
		width: 79%;height: 100%;
        border-left: 2px solid #000000;
		float: right;
	}
    .tuichu{
        margin: 20px auto;
        text-align: center;
        font-size: 24px;
        font-weight: 800;
    }
    .tuihcu a{
        color: red;
        text-decoration: none;
    }
    iframe{
        width: 100%;height: 100%;
    }
</style>
<body>
	<div class="header">
		<h1><?php echo $_SESSION["username"];?>,欢迎来到内容管理系统</h1>
        <div class="tuichu"><a href="logout.php">退出</a></div>
	</div>
	<div class="main">
		<div class="left">
			<ul class="menu">
				<li class="opt">
					用户管理
					<ul class="son">
						<li><a href="left1.html" target="right">添加用户</a></li>
						<li><a href="" target="right">管理用户</a></li>
					</ul>
				</li>
				<li class="opt">
					分类管理
					<ul class="son">
						<li><a href="addCategory.php" target="right">添加分类</a></li>
						<li><a href="showCategory.php" target="right">管理分类</a></li>
					</ul>
				</li>
                <li class="opt">
                    内容管理
                    <ul class="son">
                        <li><a href="addCon.php" target="right">添加内容</a></li>
                        <li><a href="showCon.php" target="right">管理内容</a></li>
                    </ul>
                </li>
			</ul>
		</div>
        <div class="right">
            <iframe  name="right"></iframe>
        </div>
	</div>
</body>
<script src="../../ajax/jquery.min.js" type="text/javascript" charset="utf-8"></script>
<script type="text/javascript">
	$(".opt").click(function(){
		$(this).find(".son").toggle(100)
	})
    $("a").click(function (e) {  //阻止冒泡事件
        e.stopPropagation()
    })
</script>
</html>