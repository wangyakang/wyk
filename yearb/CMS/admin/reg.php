<html>
	<head>
		<title></title>
	</head>
	<style>
		.box{
			width: 400px;height: 250px;
			position: fixed;
			left: 0;right: 0;top: 0;bottom: 0;
			margin: auto;
			text-align: center;
			border: 1px solid #666666;
		}
	</style>
	<body>
		<div class="box">
			<h3>注册页</h3>
			<form action="add.php" method="post">
				用户名：<input type="text" name="username" /> <span class="message"></span><br /><br />
				密码：<input type="password" name="password" /><span class="message"></span><br /><br />
				<input type="submit" name="" id="" value="注册" disabled="disabled" /><br /><br />
				
			</form>
			已有用户名，请<a href="login.php">点击登录</a>
		</div>
	</body>
    <script src="jquery.min.js"></script>
    <script>
        var btn=$("input[type=submit]")
        //1.用户名
        var reg=/^\w{5,10}$/;
        $("input[name=username]").keyup(function () {
            var val=($(this).val());
            if(!reg.test(val)){
                $(".message").eq(0).html("<br/>格式错误").css({color:"red"});
                $(btn).attr("disabled","true");
                $("input[name=username]").removeAttr("ok");
            }else {
                $.ajax({
                    url:"zhuce.php",
                    data:{username:val},
                    success:function (e) {
                        if(e=="ok"){
                            $("input[name=username]").attr("ok","ok");
                            $(".message").eq(0).html("<br/>用户名可用").css({color:"green"});
                            if($("input[name=password]").attr("ok")=="ok"){
                                $(btn).removeAttr("disabled")
                            }
                        }else if (e=="erro"){
                            $(".message").eq(0).html("<br/>用户名已存在").css({color:"red"});
                            $(btn).attr("disabled","true");
                            $("input[name=username]").removeAttr("ok");
                        }
                    }
                })
            }
        })
        $("input[name=password]").keyup(function () {
            var val=($(this).val());
            if(!reg.test(val)){
                $(".message").eq(1).html("<br/>格式错误").css({color:"red"});
                $(btn).attr("disabled","true");
                $("input[name=password]").removeAttr("ok");
            }else {
                $(".message").eq(1).html("<br/>输入正确").css({color:"green"});
                $("input[name=password]").attr("ok","ok");
                if($("input[name=username]").attr("ok")=="ok"){
                    $(btn).removeAttr("disabled")
                }
            }
        })
    </script>
</html>