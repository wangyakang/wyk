
<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title></title>
		<style>
			.box{
				margin: 0 auto;
				border: 1px solid #666;
				text-align: center;
				width: 200px;
				height: 300px;
			}
			.title{
				background: #666666;
			}
			.son a,span{
				color: red;
			}
		</style>
	</head>
	<body>
		<div class="box">
			<div class="title">
				提示信息
			</div>
			<div class="son">
				<?php echo $message;?><br />
				<span>3</span>
				秒后返回 <br />
				没有跳转请 <a href="<?php echo $url; ?>">点击</a>
			</div>
		</div>
	</body>
	<script type="text/javascript">
		var span=document.querySelector("span");
		var num=3;
		var t=setInterval(move,1000)
		function move(){
			num--;			
			if(num==0){
				clearInterval(t)
				location.href="<?php echo $url; ?>"
			}
			span.innerHTML=num;	
		}		
	</script>
</html>
