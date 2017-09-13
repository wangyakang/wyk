<?php
/* Smarty version 3.1.30, created on 2017-04-14 02:56:29
  from "E:\wamp\www\ceshi\template\index\order.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_58f01e3dcd0ed1_44318613',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7a02717522b457f0e3e9947d8d460c4aaff025f6' => 
    array (
      0 => 'E:\\wamp\\www\\ceshi\\template\\index\\order.html',
      1 => 1492098144,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_58f01e3dcd0ed1_44318613 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1,maximum-scale=1,user-scalable=no" />
    <title></title>
    <?php echo '<script'; ?>
 src="<?php echo JS_PATH;?>
/mui.min.js"><?php echo '</script'; ?>
>
    <link rel="stylesheet" href="<?php echo CSS_PATH;?>
/order.css" />
    <link rel="stylesheet" href="<?php echo CSS_PATH;?>
/mui.min.css" />
    <?php echo '<script'; ?>
 src="<?php echo JS_PATH;?>
/public/zepto.js"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 src="<?php echo JS_PATH;?>
/public/iscroll-probe.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="<?php echo JS_PATH;?>
/order.js"><?php echo '</script'; ?>
>
</head>
<body>
	<div class="wrap">
		<div class="body">
			<div class="price-box">
				<div class="photo-box">
					<div class="xingji">
						<span class="word-xin">BEIJING.CHINA</span>
						<span class="word-xin">
							<span class="star mui-icon mui-icon-star"></span>
							<span class="star mui-icon mui-icon-star"></span>
							<span class="star mui-icon mui-icon-star"></span>
							<span class="star mui-icon mui-icon-star"></span>
							<span class="star mui-icon mui-icon-star"></span>
						</span>
					</div>
				</div>
				<div class="address-box">
					<div class="title-ad">[京韵文化]太原至北京</div>
					<div class="day-ad"><span class="rili"></span>5DAY , 4NIGHT</div>
					<div class="fenlei-ad">
						<ul>
							<li class="fenlei"></li>
							<li class="fenlei"></li>
							<li class="fenlei"></li>
						</ul>
					</div>
				</div>
				<div class="time-box">
					<div class="title-en">CHUXINGSHIJIAN</div>
					<div class="title-ha">出行时间</div>
					<div class="img-xian"></div>
					<div class="data">
						<div class="data-aa">5.21</div>
						<div class="data-aa">5.22</div>
						<div class="data-aa">5.23</div>
						<div class="data-aa">5.24</div>
						<div class="data-aa">5.25</div>
					</div>
				</div>
				<div class="taocan-box">
					<div class="title-en">CHUXINGTAOCAN</div>
					<div class="title-ha">出行套餐</div>
					<div class="img-xian"></div>
					<div class="guanggao-box">
						<img src="<?php echo IMG_PATH;?>
/order/order_03.png" alt="" />
					</div>
					<ul>
						<li class="fangan">
							<span class="icon-fangan"></span>
							<span>旅游方案</span>
							<span>x 400</span>
						</li>
						<li class="fangan">
							<span class="icon-fangan"></span>
							<span>机加酒</span>
							<span>x 288</span>
						</li>
					</ul>
				</div>
				<div class="number-box">
					<div class="title-en">CHUXINGRENSHU</div>
					<div class="title-ha">出行人数</div>
					<div class="img-xian"></div>
					<div class="pay-box1">
						<div class="img-peo">
							<img src="<?php echo IMG_PATH;?>
/order/order_09.png"/>
						</div>
						<div class="chuxing-peo"><span>2</span></div>
						<div class="mui-switch mui-switch-mini mui-active mui-switch-blue mui-daxiao">
						  <div class="mui-switch-handle"></div>
						</div>
						<div class="chuxingx">出行险</div>
					</div>
				</div>
				<div class="pay-box">
					<div class="pay-mein">
						<ul>
							<li class="pay-way">
								<div class="circle-pay"></div>
								<div class="left-tit">支付方式</div>
								<div class="right-tit">在线付款</div>
							</li>
							<li class="xian"></li>
							<li class="pay-way">
								<div class="circle-payq"></div>
								<div class="left-tit">旅行优惠券</div>
								<div class="right-tit">暂无优惠券服务</div>
							</li>
						</ul>
					</div>
				</div>
			</div>
			<div class="price-box2">
				<div class="neirong-pay">
					<div class="anniu">折扣</div>
					<div class="chengyi">x</div>
					<div class="price">90%</div>
					<div class="right-price">
						<div class="rmb">RMB.</div>
						<div class="price-shu">1238.20</div>
					</div>
				</div>
			</div>
		</div>
		<div class="header">
			<div class="header-left"><</div>
			<div class="header-right">
				<div>订单详情信息</div>
				<div>DINGDANXIANGQING</div>
			</div>
		</div>
		<div class="footer">
			<a href="" class="pay1"></a>
		</div>
		<?php echo '<script'; ?>
 src="<?php echo JS_PATH;?>
/public/touch.js"><?php echo '</script'; ?>
>
		<?php echo '<script'; ?>
>
			touch.on(".pay1","tap",function(){
				window.location.href="index.php?m=index&f=pay1"
			})
			touch.on(".header-left","tap",function(){
				window.location.href="index.php?m=index&f=renmen"
			})
		<?php echo '</script'; ?>
>
	</div>
</body>
<?php echo '<script'; ?>
>
	function size(origin,type){
			var type=type||"x";
			var originW=origin;
			if(type=="x"){
				var clientW=document.documentElement.clientWidth;
	   			var bili=clientW/originW*100+"px";
			}else if(type=="y"){
				var clientH=document.documentElement.clientHeight;
	   			var bili=clientH/originW*100+"px";
			}   		
	   		document.getElementsByTagName("html")[0].style.fontSize=bili;
	}
	size(750)
	size(1334,"y")
	
<?php echo '</script'; ?>
>

</html><?php }
}
