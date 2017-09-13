<?php
/* Smarty version 3.1.30, created on 2017-04-13 04:50:34
  from "E:\wamp\www\ceshi\template\index\reg.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_58eee77a9b39c6_50188955',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2bb78212b56225df54a0c74e1b97669f2a7bd894' => 
    array (
      0 => 'E:\\wamp\\www\\ceshi\\template\\index\\reg.html',
      1 => 1492051833,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_58eee77a9b39c6_50188955 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html class="ui-page-login">

	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1,maximum-scale=1,user-scalable=no" />
		<title>注册</title>
		<link href="<?php echo CSS_PATH;?>
/mui.min.css" rel="stylesheet" />
		<link href="<?php echo CSS_PATH;?>
/style.css" rel="stylesheet" />
		<link rel="stylesheet" href="<?php echo CSS_PATH;?>
/ymreg.css" />
		<?php echo '<script'; ?>
 src="<?php echo JS_PATH;?>
/jquery.js"><?php echo '</script'; ?>
>
		<?php echo '<script'; ?>
 src="<?php echo JS_PATH;?>
/jquery.validate.js"><?php echo '</script'; ?>
>
    	<?php echo '<script'; ?>
 src="<?php echo JS_PATH;?>
/jquery.metadata.js"><?php echo '</script'; ?>
>
    	<?php echo '<script'; ?>
 src="<?php echo JS_PATH;?>
/reg.js"><?php echo '</script'; ?>
>
		<style>
		.mui-input-row{
			position: relative;
		}
			label.error{
				width:2.61rem !important;
				color: red;
				position: absolute;
				top: 0;left:2.68rem;
			}
			.area {
				margin: 20px auto 0px auto;
			}
			.mui-input-group:first-child {
				margin-top: 20px;
			}
			.mui-input-group label {
				width: 22%;
			}
			.mui-input-row label~input,
			.mui-input-row label~select,
			.mui-input-row label~textarea {
				width: 78%;
			}
			.mui-checkbox input[type=checkbox],
			.mui-radio input[type=radio] {
				top: 6px;
			}
			.mui-content-padded {
				margin-top: 25px;
			}
			.mui-btn {
				padding: 10px;
			}
			
		</style>
	</head>

	<body>
		<div class="ym_bodyimg"></div>
		<img src="<?php echo IMG_PATH;?>
/login/ymTRAVEL.png" alt="" class="ym_logo"/>
		<header class="mui-bar mui-bar-nav ym_reg_header">
			<a class="mui-action-back mui-icon mui-icon-left-nav mui-pull-left"></a>
			<h1 class="mui-title"></h1>
		</header>
		<div class="mui-content ym_main">
			<!--<img src="images/ymdesc.png" alt="" />-->
			<form class="mui-input-group ym_main_list" id="myform" action="index.php?m=index&f=reg&a=addReg" method="post">
				<div class="ym_reg_title">
					<img src="<?php echo IMG_PATH;?>
/login/base2.png" alt="" />
				</div>
				<div class="ym_wrap">
					<div class="mui-input-row">
						<label>
							<div class="ym_reg_circle1"></div>
							<div class="ym_reg_circle2"></div>
						</label>
						<input id='account' type="text" class="mui-input-clear mui-input" placeholder="请输入账号" name="uname">
					</div>
					<div class="mui-input-row">
						<label>
							<div class="ym_reg_circle1"></div>
							<div class="ym_reg_circle2"></div>
						</label>
						<input id='pass' type="password" class="mui-input-clear mui-input" placeholder="请输入密码" name="upass">
					</div>
					<div class="mui-input-row">
						<label>
							<div class="ym_reg_circle1"></div>
							<div class="ym_reg_circle2"></div>
						</label>
						<input id='password_confirm' type="password" class="mui-input-clear mui-input" placeholder="请确认密码" name="upass2">
					</div>
					<div class="mui-input-row">
						<label>
							<div class="ym_reg_circle1"></div>
							<div class="ym_reg_circle2"></div>
						</label>
						<input id='email' type="email" class="mui-input-clear mui-input" placeholder="请输入邮箱" name="email">
					</div>				
				</div>
				<div class="ym_reg_icon">
					<img src="<?php echo IMG_PATH;?>
/login/ymperson.png" alt="" />
				</div>
				<div class="mui-content-padded">
					<button id='reg' class="mui-btn mui-btn-block mui-btn-primary ym_primary">NEXT</button>
				</div>
			</form>
			<!--<div class="mui-content-padded">
				<p>注册真实可用，注册成功后的用户可用于登录，但是示例程序并未和服务端交互，用户相关数据仅存储于本地。</p>
			</div>-->
		</div>
		<?php echo '<script'; ?>
 src="<?php echo JS_PATH;?>
/mui.min.js"><?php echo '</script'; ?>
>
		<?php echo '<script'; ?>
 src="<?php echo JS_PATH;?>
/appa.js"><?php echo '</script'; ?>
>
		<?php echo '<script'; ?>
>
//			(function($, doc) {
//				$.init();
//				$.plusReady(function() {
//					var settings = app.getSettings();
//					var regButton = doc.getElementById('reg');
//					var accountBox = doc.getElementById('account');
//					var passwordBox = doc.getElementById('password');
//					var passwordConfirmBox = doc.getElementById('password_confirm');
//					var emailBox = doc.getElementById('email');
//					regButton.addEventListener('tap', function(event) {
//						var regInfo = {
//							account: accountBox.value,
//							password: passwordBox.value,
//							email: emailBox.value
//						};
//						var passwordConfirm = passwordConfirmBox.value;
//						if (passwordConfirm != regInfo.password) {
//							plus.nativeUI.toast('密码两次输入不一致');
//							return;
//						}
//						app.reg(regInfo, function(err) {
//							if (err) {
//								plus.nativeUI.toast(err);
//								return;
//							}
//							plus.nativeUI.toast('注册成功');
//							/*
//							 * 注意：
//							 * 1、因本示例应用启动页就是登录页面，因此注册成功后，直接显示登录页即可；
//							 * 2、如果真实案例中，启动页不是登录页，则需修改，使用mui.openWindow打开真实的登录页面
//							 */
//							plus.webview.getLaunchWebview().show("pop-in",200,function () {
//								plus.webview.currentWebview().close("none");
//							});
//							//若启动页不是登录页，则需通过如下方式打开登录页
////							$.openWindow({
////								url: 'login.html',
////								id: 'login',
////								show: {
////									aniShow: 'pop-in'
////								}
////							});
//						});
//					});
//				});
//			}(mui, document));
			
		document.addEventListener("DOMContentLoaded",function(){
			//根元素字体大小
			size(750);
			function size(a){
				var clientW=document.documentElement.clientWidth;
				var originW=a;
				var bili=clientW/originW*100+"px";
				var html=document.querySelector("html");
				html.style.fontSize=bili;
			}
		})
		<?php echo '</script'; ?>
>
	</body>

</html><?php }
}
