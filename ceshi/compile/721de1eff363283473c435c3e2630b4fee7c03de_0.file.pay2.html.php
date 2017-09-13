<?php
/* Smarty version 3.1.30, created on 2017-04-14 03:07:52
  from "E:\wamp\www\ceshi\template\index\pay2.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_58f020e8ecb839_29546590',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '721de1eff363283473c435c3e2630b4fee7c03de' => 
    array (
      0 => 'E:\\wamp\\www\\ceshi\\template\\index\\pay2.html',
      1 => 1492131973,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_58f020e8ecb839_29546590 (Smarty_Internal_Template $_smarty_tpl) {
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
/add.css" />
    <?php echo '<script'; ?>
 src="<?php echo JS_PATH;?>
/app.js"><?php echo '</script'; ?>
>
    <?php echo '</script'; ?>
>
</head>
<body>	
	<div class="top">
		<img src="<?php echo IMG_PATH;?>
/pay2/return.png" class="fanhuiw"/>
	</div>
	<div class="l_title">
		<div class="left">
			<span class="e_text">CHOOSE.BANK</span>
			<div class="wei"><img src="<?php echo IMG_PATH;?>
/pay2/division.png"/></div>
			<span class="c_text">选择银行卡</span>
		</div>
		<div class="right">
			<div class="tianjia">
				<img src="<?php echo IMG_PATH;?>
/pay2/＋.png" style="width: 1.55rem;height: 1.36rem;"/>
			</div>
			<?php echo '<script'; ?>
 src="<?php echo JS_PATH;?>
/public/touch.js"><?php echo '</script'; ?>
>
		<?php echo '<script'; ?>
>
			touch.on(".tianjia","tap",function(){
				window.location.href="index.php?m=index&f=addyin"
			})
			touch.on(".fanhuiw","tap",function(){
				window.location.href="index.php?m=index&f=pay1"
			})
		<?php echo '</script'; ?>
>
		</div>
	</div>
	<div class="num">
		<div class="first">03</div>
		<div class="gang">/</div>
		<div class="last">05</div>
	</div>
	<div class="car">
		<img src="<?php echo IMG_PATH;?>
/pay2/图层-31.png" alt="" style="width: 5.21rem;height: 6rem;"/>
		<div class="cnum"><i class="n1">6222</i>*************<i class="n1">3232</i></div>
	</div>
</body>
</html><?php }
}
