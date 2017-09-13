<?php
/* Smarty version 3.1.30, created on 2017-04-14 03:18:09
  from "E:\wamp\www\ceshi\template\index\pay1.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_58f02351a78ad7_10888125',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3a4e33c4c7fea6d8f59a04777145b9be1f9dabf6' => 
    array (
      0 => 'E:\\wamp\\www\\ceshi\\template\\index\\pay1.html',
      1 => 1492132228,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_58f02351a78ad7_10888125 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <title></title>
    <?php echo '<script'; ?>
 src="<?php echo JS_PATH;?>
/public/swiper.min.js"><?php echo '</script'; ?>
>
    <link rel="stylesheet" href="<?php echo CSS_PATH;?>
/public/swiper.min.css" />
    <?php echo '<script'; ?>
 src="<?php echo JS_PATH;?>
/mui.min.js"><?php echo '</script'; ?>
>
    <link href="<?php echo CSS_PATH;?>
/mui.min.css" rel="stylesheet"/>
    <?php echo '<script'; ?>
 src="<?php echo JS_PATH;?>
/public/zepto.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="<?php echo JS_PATH;?>
/public/swiper.jquery.min.js"><?php echo '</script'; ?>
>
    <link rel="stylesheet" href="<?php echo CSS_PATH;?>
/app1.css" />
    <?php echo '<script'; ?>
 src="<?php echo JS_PATH;?>
/app3.js"><?php echo '</script'; ?>
>
</head>
<body>
	<div class="body">
		<div class="top">
			<div class="l_buttom">
				<
			</div>
		</div>
		<div class="l_title">
			<div class="l_etext">DERFULCTOM</div>
			<div class="l_betext">PACENT.CEN</div>
			<div class="l_division"><img src="<?php echo IMG_PATH;?>
/pay1/division.png" alt="" /></div>
			<div class="l_hot">付款方式选择</div>
		</div>
		<div class="l_pay">
			<img src="<?php echo IMG_PATH;?>
/pay1/图层-7.png" alt="" style="width: 7.2rem;height: 8.42rem;"/>
			<img src="<?php echo IMG_PATH;?>
/pay1/图层-22.png" alt="" style="width: 0.96rem;height: 0.96rem;" class="bank"/>
				<img src="<?php echo IMG_PATH;?>
/pay1/wallet-副本.png" alt="" style="width: 0.96rem;height: 0.96rem;" class="bag"/>
				<span class="payzi1">银行卡支付</span>
				<span class="payzi11">使用绑定银行卡完成在线支付</span>
				<div class="num">5</div>
				<span class="payzi2">本地钱包</span>
				<span class="payzi22">本地钱包完成支付可获得更多优惠</span>
				<div class="l_zhifu">
					<a href=""><div class="zf1"><img src="<?php echo IMG_PATH;?>
/pay1/形状-109_01.png" alt="" style="width: 3.53rem;height: 1.61rem;"/></div></a>
					<a href=""><div class="zf1"><img src="<?php echo IMG_PATH;?>
/pay1/形状-109_02.png" alt=""  style="width: 3.53rem;height: 1.61rem;"/></div></a>
				</div>
		</div>
			<div class="l_buttompay">
				<img class="l_img" src="<?php echo IMG_PATH;?>
/pay1/图层-25.png"/  style="width: 3.66rem;height: 0.91rem;">
			</div>
	</div>
	<?php echo '<script'; ?>
 src="<?php echo JS_PATH;?>
/public/touch.js"><?php echo '</script'; ?>
>
		<?php echo '<script'; ?>
>
			touch.on(".l_img","tap",function(){
				window.location.href="index.php?m=index&f=pay2&a=pay3"
			})
			touch.on(".bank","tap",function(){
				window.location.href="index.php?m=index&f=pay2"
			})
			touch.on(".l_buttom","tap",function(){
				window.location.href="index.php?m=index&f=order"
			})
		<?php echo '</script'; ?>
>
</body>
</html><?php }
}
