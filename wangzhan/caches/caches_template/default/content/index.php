<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?><?php include template("content" ,"header"); ?>
	<!-- banner -->
	<div class="banner_out">
		<div class="banner_box">
			<ul class="banner_top">
				<li><img src="<?php echo IMG_PATH;?>myimg/banner/banner1.jpg" alt=""></li>
				<li><img src="<?php echo IMG_PATH;?>myimg/banner/banner2.jpg" alt=""></li>
				<li><img src="<?php echo IMG_PATH;?>myimg/banner/banner3.jpg" alt=""></li>
			</ul>
			<ul class="banner_bottom">
				<li id="cir_banner"></li>
				<li></li>
				<li></li>
			</ul>
		</div>
	</div>
	<!-- banner结束 -->
	<!-- 品牌介绍 -->
	<div class="pinpai_out">
		<div class="pinpai_box">
			<ul>
				<li class="jieshao1"><a href="<?php echo $CATEGORYS['21']['url'];?>"></a></li>   			
				<li class="jieshao2"><a href="<?php echo $CATEGORYS['23']['url'];?>"></a></li>
				<li class="jieshao3"><a href="<?php echo $CATEGORYS['26']['url'];?>"></a></li>
			</ul>
		</div>
	</div>
	<!-- 品牌介绍结束 -->
<?php include template("content" ,"footer"); ?>
