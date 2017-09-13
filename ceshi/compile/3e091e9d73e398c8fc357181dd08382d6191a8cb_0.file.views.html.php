<?php
/* Smarty version 3.1.30, created on 2017-04-12 08:37:51
  from "E:\wamp\www\ceshi\template\index\views.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_58edcb3fa948f2_88750731',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3e091e9d73e398c8fc357181dd08382d6191a8cb' => 
    array (
      0 => 'E:\\wamp\\www\\ceshi\\template\\index\\views.html',
      1 => 1491979060,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_58edcb3fa948f2_88750731 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" 
    	content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
		<title>View</title>
		<link rel="stylesheet" type="text/css" href="<?php echo CSS_PATH;?>
/public/public.css"/>
		<link rel="stylesheet" type="text/css" href="<?php echo CSS_PATH;?>
/public/swiper.min.css"/>
		<?php echo '<script'; ?>
 src="<?php echo JS_PATH;?>
/public/zepto.js"><?php echo '</script'; ?>
>
		<?php echo '<script'; ?>
 src="<?php echo JS_PATH;?>
/public/swiper.min.js"><?php echo '</script'; ?>
>
		<?php echo '<script'; ?>
 src="<?php echo JS_PATH;?>
/view.js"><?php echo '</script'; ?>
>
	</head>
	    <style>
    html, body {
        position: relative;
        height: 100%;
    }
    body {
        background: #eee;
        font-family: Helvetica Neue, Helvetica, Arial, sans-serif;
        margin: 0;
        padding: 0;
    }
    .swiper-container {
        width: 100vw;
        height: 100vh;
    }
    .swiper-slide {
        text-align: center;
        /* Center slide text vertically */
        display: -webkit-box;
        display: -ms-flexbox;
        display: -webkit-flex;
        display: flex;
        -webkit-box-pack: center;
        -ms-flex-pack: center;
        -webkit-justify-content: center;
        justify-content: center;
        -webkit-box-align: center;
        -ms-flex-align: center;
        -webkit-align-items: center;
        align-items: center;
    }
    .views{
    	width: 100vw;height: 100vh;
    }
    .csfview1{
    	background: url(<?php echo IMG_PATH;?>
/views/view1.png) center no-repeat;
    	background-size: contain;
    }
    .csfview2{
    	background: url(<?php echo IMG_PATH;?>
/views/view2.png) center no-repeat;
    	background-size: contain;
    }
    .csfview3{
    	background: url(<?php echo IMG_PATH;?>
/views/view3.png) center no-repeat;
    	background-size: contain;
    }
    .csfview4{
    	background: url(<?php echo IMG_PATH;?>
/views/view4.png) center no-repeat;
    	background-size: contain;
    }
    .views h2{
    	font-size: 1rem;
    	font-weight: 500;
    	margin-top: 15rem;
    }
    .views h4{
    	font-size: 0.8rem;
    	font-weight: 500;
    	margin-top: 5%;
    }
    .views form{
    	margin-top: 17rem;
    }
    .views form input{
    	width:6rem;height:2rem;
    	background: rgb(0,255,200);
    	border: 0.2rem solid #fff;
    	border-radius: 1rem;
    	color: #fff;
    	font-size: 1rem;
    	text-align: center;
    	line-height: 1.6rem;
    }
    </style>
</head>
<body>
    <!-- Swiper -->
    <div class="swiper-container">
        <div class="swiper-wrapper">
            <div class="swiper-slide">
            	<div class="views csfview1">
            		<h2>全国酒店任您选</h2>
            		<h4>30000多家酒店任您挑选</h4>
            	</div>
            </div>
            <div class="swiper-slide">
            	<div class="views csfview2">
            		<h2>随时随地订机票</h2>
            		<h4>上千条航线低价信息为您节省更多</h4>
            	</div>
            </div>
            <div class="swiper-slide">
            	<div class="views csfview3">
            		<h2>个人位置服务</h2>
            		<h4>轻松查找商圈、景区及周边酒店</h4>
            	</div>
            </div>
            <div class="swiper-slide">
            	<div class="views csfview4">
            		<form action="">
            			<a href="index.php?m=index&f=appa"><input type="button" value="现在出发" /></a>
            		</form>
            	</div>
            </div>
        </div>
        <!-- Add Pagination -->
        <div class="swiper-pagination"></div>
    </div>
    <!-- Initialize Swiper -->
    <?php echo '<script'; ?>
>
    var swiper = new Swiper('.swiper-container', {
        pagination: '.swiper-pagination',
        paginationClickable: true
    });
    <?php echo '</script'; ?>
>
</body>
</html>
<?php }
}
