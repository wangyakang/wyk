<?php
/* Smarty version 3.1.30, created on 2017-04-12 18:11:36
  from "E:\wamp\www\ceshi\template\index\comment.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_58ee51b8cfe5e2_75896635',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'df2e863be620acd7641ab643b5122d488264481e' => 
    array (
      0 => 'E:\\wamp\\www\\ceshi\\template\\index\\comment.html',
      1 => 1492013495,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_58ee51b8cfe5e2_75896635 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title></title>
	<link rel="stylesheet" href="<?php echo CSS_PATH;?>
/public/swiper.min.css">
    <link rel="stylesheet" href="<?php echo CSS_PATH;?>
/public/public.css" />
    <link rel="stylesheet" href="<?php echo CSS_PATH;?>
/comment.css" />
    <?php echo '<script'; ?>
 src="<?php echo JS_PATH;?>
/public/zepto.js"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 src="<?php echo JS_PATH;?>
/index.js"><?php echo '</script'; ?>
>
	</head>
	<body>
		<div class="hanbox">
			<!--状态栏-->
			
			<div class="hanstaue"></div>
				<!--导航栏-->
				<div class="hantop">
					<div class="hannav"></div>
					<!--返回键-->
					
					<div class="fanhui">
						<
					</div>
					<?php echo '<script'; ?>
 src="<?php echo JS_PATH;?>
/public/touch.js"><?php echo '</script'; ?>
>
		<?php echo '<script'; ?>
>
			touch.on(".fanhui","tap",function(){
				window.location.href="index.php?m=index&f=tour"
			})
		<?php echo '</script'; ?>
>
					<div class="ly-navTitle">
					<p>发布评论信息</p>
					<p>FABIAOPINGLUN</p>
				</div>	
			</div>
			<div class="pinglun">
				<textarea name="" rows="" cols="">请评论...</textarea>
				<div class="zishu">
					<span>/300</span>
					<span class="zi">296</span>
			</div>
		</div>
	</body>
</html>
<?php }
}
