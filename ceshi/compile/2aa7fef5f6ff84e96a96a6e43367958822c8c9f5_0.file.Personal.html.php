<?php
/* Smarty version 3.1.30, created on 2017-04-12 17:31:39
  from "E:\wamp\www\ceshi\template\index\Personal.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_58ee485b2a3096_41571949',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2aa7fef5f6ff84e96a96a6e43367958822c8c9f5' => 
    array (
      0 => 'E:\\wamp\\www\\ceshi\\template\\index\\Personal.html',
      1 => 1492010634,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_58ee485b2a3096_41571949 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" 
    	content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
		<title>个人中心</title>
		<?php echo '<script'; ?>
 src="<?php echo JS_PATH;?>
/public/zepto.js"><?php echo '</script'; ?>
>
		<?php echo '<script'; ?>
 src="<?php echo JS_PATH;?>
/public/rem.js"><?php echo '</script'; ?>
>
		<?php echo '<script'; ?>
 src="<?php echo JS_PATH;?>
/public/iscroll.js"><?php echo '</script'; ?>
>
		<?php echo '<script'; ?>
 src="<?php echo JS_PATH;?>
/public/swiper.min.js"><?php echo '</script'; ?>
>
		<?php echo '<script'; ?>
 src="<?php echo JS_PATH;?>
/personal.js"><?php echo '</script'; ?>
>
		<link rel="stylesheet" type="text/css" href="<?php echo CSS_PATH;?>
/public/public.css"/>
		<link rel="stylesheet" href="<?php echo CSS_PATH;?>
/Personal.css" />
		<link rel="stylesheet" href="<?php echo CSS_PATH;?>
/public/swiper.min.css" />
	</head>
	<body>
		<div class="csf_Personal">
			<div class="csf_top">
				<div class="bluec"></div>
			</div>
			<div class="icons"></div>
			<!--user-->
			<div class="csf_name">
				<div class="heng"></div>
				<div class="name">
					<p>林中小土鳖</p>
				</div>
				<div class="heng"></div>
			</div>
			<!--关注量-->
			<div class="csf_leibie">
				<div class="fabu">
					<p class="num">111</p>
					<p class="cont">发布</p>
				</div>
				<div class="fensi">
					<p class="num">222</p>
					<p class="cont">粉丝</p>
				</div>
				<div class="guanzhu">
					<p class="num">333</p>
					<p class="cont">关注</p>
				</div>
			</div>
			<!--目录-->
			<ul class="cata">
				<li>
					<a href="###" class="csflianjie">
						<span>我的收藏</span>
						<span class="jiantou">&gt;</a>
					</a>
				</li>
				<li>
					<a href="###" class="csflianjie">
						<span>全部订单</span>
						<span class="jiantou">&gt;</a>
					</a>
				</li>
				<li>
					<a href="###" class="csflianjie">
						<span>我的钱包</span>
						<span class="jiantou">&gt;</a>
					</a>
				</li>
				<li>
					<a href="###" class="csflianjie">
						<span>联系客服</span>
						<span class="jiantou">&gt;</a>
					</a>
				</li>
			</ul>
			<!--游记-->
			<div class="csf_travel">
				<div class="heng"></div>
				<div class="name">
					<p>我的游记</p>
					<p class="englishi">MY TRAVELS</p>
				</div>
				<div class="heng"></div>
			</div>
			<div class="swiper-container csfcontainer">
		        <div class="swiper-wrapper">
		            <div class="swiper-slide">
		            	<div class="image"></div>
				    	<p class="dizhi">北京五日游</p>
				    	<div class="jizan">
				    		<span>333</span>
				    		<span>333</span>
				    	</div>
		            </div>
		            <div class="swiper-slide">
		            	<div class="image"></div>
				    	<p class="dizhi">北京五日游</p>
				    	<div class="jizan">
				    		<span>333</span>
				    		<span>333</span>
				    	</div>
		            </div>
		            <div class="swiper-slide">
		            	<div class="image"></div>
				    	<p class="dizhi">北京五日游</p>
				    	<div class="jizan">
				    		<span>333</span>
				    		<span>333</span>
				    	</div>
		            </div>
		            <div class="swiper-slide">
		            	<div class="image"></div>
				    	<p class="dizhi">北京五日游</p>
				    	<div class="jizan">
				    		<span>333</span>
				    		<span>333</span>
				    	</div>
		            </div>
		            <div class="swiper-slide">
		            	<div class="image"></div>
				    	<p class="dizhi">北京五日游</p>
				    	<div class="jizan">
				    		<span>333</span>
				    		<span>333</span>
				    	</div>
		            </div>
		        </div>
		 	</div>
		</div>
		<!--底部-->
		<div class="footer">
			<div class="btn">
				<div class="check"></div>
				<div class="sanjiao"></div>
				<img src="<?php echo IMG_PATH;?>
/Personal/shouye.png" alt="" class="appa"/>
			</div>
			<div class="btn">
				<div class="check"></div>
				<div class="sanjiao"></div>
				<img src="<?php echo IMG_PATH;?>
/Personal/jingdian.png" alt="" class="youji"/>
			</div>
			<div class="btn">
				<div class="check"></div>
				<div class="sanjiao"></div>
				<img src="<?php echo IMG_PATH;?>
/Personal/vidio.png" alt="" class=""/>
			</div>
			<div class="btn">
				<div class="check"></div>
				<div class="sanjiao"></div>
				<img src="<?php echo IMG_PATH;?>
/Personal/my.png" alt="" />
			</div>
			<?php echo '<script'; ?>
 src="<?php echo JS_PATH;?>
/public/touch.js"><?php echo '</script'; ?>
>
					<?php echo '<script'; ?>
>
						touch.on(".youji","tap",function(){
							window.location.href="index.php?m=index&f=renmen"
						})
						touch.on(".appa","tap",function(){
							window.location.href="index.php?m=index&f=appa"
						})
					<?php echo '</script'; ?>
>
		</div>
	</body>
</html>
<?php }
}
