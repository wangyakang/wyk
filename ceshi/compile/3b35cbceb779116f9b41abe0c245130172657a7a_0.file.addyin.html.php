<?php
/* Smarty version 3.1.30, created on 2017-04-12 17:59:24
  from "E:\wamp\www\ceshi\template\index\addyin.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_58ee4edc51ddc9_78857123',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3b35cbceb779116f9b41abe0c245130172657a7a' => 
    array (
      0 => 'E:\\wamp\\www\\ceshi\\template\\index\\addyin.html',
      1 => 1492012760,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_58ee4edc51ddc9_78857123 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <title></title>
    <?php echo '<script'; ?>
 src="<?php echo JS_PATH;?>
/app.js"><?php echo '</script'; ?>
>
    <link rel="stylesheet" type="text/css" href="<?php echo CSS_PATH;?>
/add2.css"/>
    <link rel="stylesheet" type="text/css" href="<?php echo CSS_PATH;?>
/public/swiper.min.css"/>
    <?php echo '<script'; ?>
 src="<?php echo JS_PATH;?>
/public/swiper.min.js"><?php echo '</script'; ?>
>
			
</head>
<body>	
	<div class="l_top">
		<img src="<?php echo IMG_PATH;?>
/more-副本-3-拷贝.png" class="fanhuia"/>
		<?php echo '<script'; ?>
 src="<?php echo JS_PATH;?>
/public/touch.js"><?php echo '</script'; ?>
>
		<?php echo '<script'; ?>
>
			touch.on(".fanhuia","tap",function(){
				window.location.href="index.php?m=index&f=pay2"
			})
		<?php echo '</script'; ?>
>
	</div>
	<div class="l_title">
		<span class="es_text">DERFULCTOM</span>
		<span class="e_text">BANK.CARD</span>
			<div class="wei"><img src="<?php echo IMG_PATH;?>
/division_02.png" style="width: 2.07rem;height: 0.05rem;"/></div>
			<span class="c_text">添加银行卡片</span>
	</div>
	<div class="l_add">
		<form action="">
			<input type="text" name="card" id="card" placeholder="请输入您的银行卡号" class="inputs"/>
			<input type="text" name="card" id="user" placeholder="请输入持卡人姓名" class="inputs"/>
			<input type="text" name="card" id="idcard" placeholder="请输入您的银行卡号身份证号码" class="inputs"/>
			<input type="text" name="card" id="home" placeholder="请输入您的开户银行" class="inputs"/>
		</form>
		<a href="../pay2/index.html"><div class="l_buttom"></div></a>
	</div>
</body>
</html><?php }
}
