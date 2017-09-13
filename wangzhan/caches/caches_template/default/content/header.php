<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?><!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
	<title>广州欢腾鞋业</title>
	<link rel="stylesheet" href="<?php echo CSS_PATH;?>mycss/bass.css">
	<link rel="stylesheet" href="<?php echo CSS_PATH;?>mycss/main.css">
	<script src="<?php echo JS_PATH;?>myjs/jquery.min.js"></script>
	<script src="<?php echo JS_PATH;?>myjs/main.js"></script>
</head>
<body>
	<!-- header -->
	<div class="header">
		<div class="box">
			<span>
				<em>.</em>
				欢迎进入本网站!
			</span>
			<ul>
				<li><a href="">设为首页</a></li>
				<li><a href="">加入收藏</a></li>
				<li><a href="lianxi.html">联系我们</a></li>
			</ul>
		</div>
	</div>
	<!-- header-end -->
		<!-- 导航 --> 
	<div class="nav">
		<div class="nav_box">
			<div class="logo">
				<img src="<?php echo IMG_PATH;?>myimg/logo.png" alt="">
			</div>
			<ul class="nav_word">
				<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=518b27e4401c7f5550d74a1f0b05c9bd&action=category&catid=0&num=10\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'category')) {$data = $content_tag->category(array('catid'=>'0','limit'=>'10',));}?>
				<?php $i=0?> 
					<?php $n=1;if(is_array($data)) foreach($data AS $v) { ?>
					<?php $i++; ?>
					<?php if($i==1) { ?><li class="a<?php echo $v['catid'];?>" style="background:url(<?php echo thumb($v[image]);?>);"><a href="index.php"></a></li><?php } else { ?><li class="a<?php echo $v['catid'];?>" style="background:url(<?php echo thumb($v[image]);?>);"><a href="<?php echo $v['url'];?>"></a></li><?php } ?>
					<?php $n++;}unset($n); ?>
				<?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
			</ul>
		</div>
	</div>
	<!-- 导航结束 -->
