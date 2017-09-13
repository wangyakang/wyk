<?php
/* Smarty version 3.1.30, created on 2017-04-14 03:18:11
  from "E:\wamp\www\ceshi\template\index\pay3.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_58f023537fc044_53991956',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'cf3852bc9c4efc2e7291be5bdb761bb5e0b5df4e' => 
    array (
      0 => 'E:\\wamp\\www\\ceshi\\template\\index\\pay3.html',
      1 => 1492132686,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_58f023537fc044_53991956 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <title></title>
	<link rel="stylesheet" href="<?php echo CSS_PATH;?>
/pay.css" />
	<?php echo '<script'; ?>
 src="<?php echo JS_PATH;?>
/app3.js"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 src="<?php echo JS_PATH;?>
/public/touch.js"><?php echo '</script'; ?>
>
</head>
<body>
	<div class="bottom">
		<img class="fanhuiq" src="<?php echo IMG_PATH;?>
/pay3/more-副本-3-拷贝.png" alt="" class="return" style="width: 0.45rem;height: 0.45rem;margin-left: 0.24rem;margin-top: 0.77rem;"/>
	</div>
	<div class="bankcard">
		<div class="num">
			<span>6222</span>
			<span>9860</span>
			<span>8306</span>
			<span>3434</span>
		</div>
		<div class="xx">
			<div class="carxx">
				<div class="top">JIEZHI</div>
				<div class="bot">RIQIXUANZE</div>
			</div>
			<div class="tim">06&nbsp;20</div>
		</div>
		<div class="nam">Blus.Guo</div>
	</div>
	<div class="redt">
		<div class="money">
			<span class="rmb">RMB.</span>
			<span class="jine" style="font-size: 0.42rem;margin-left: -0.1rem;">1238.40</span>
		</div>
		<div class="massage">
			本次消费需支付的金额
		</div>
	</div>
	<div class="sure">
		跳过指纹验证
	</div>
	<div class="surepay">
		<div class="quxiao">×</div>
		<div class="surem">
			<span class="rmb1">RMB.</span>
			<span class="jine1" style="font-size: 0.42rem;margin-left: -0.1rem;">1238.40</span>
		</div>
	</div>
</body>
<?php echo '<script'; ?>
>
	var surepay=document.querySelector(".surepay");
	touch.on(".sure","touchstart",function(){
		surepay.style.display="block";
	})
	touch.on(".quxiao","touchstart",function(){
		surepay.style.display="none";
	})
	touch.on(".fanhuiq","tap",function(){
		window.location.href="index.php?m=index&f=pay1"
	})
<?php echo '</script'; ?>
>
</html><?php }
}
