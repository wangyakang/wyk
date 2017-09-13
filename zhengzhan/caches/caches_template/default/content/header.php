<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?><!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title></title>
	<!--<link rel="stylesheet" href="<?php echo CSS_PATH;?>mycss/base.css">
	<link rel="stylesheet" href="<?php echo CSS_PATH;?>mycss/main.css">-->
	<link rel="stylesheet" href="<?php echo CSS_PATH;?>mycss/stylehead.css">
		<script src="<?php echo JS_PATH;?>myjs/jquery.min.js"></script>
	</head>
	<body>
<!-- top -->
	<div class="m_top">
		<div class="m_toph">
			<div class="m_topcen">
				<img src="<?php echo IMG_PATH;?>myimg/kfrx.png" alt="" class="m_tel">
				<a href=""><span class="m_texto">English</span></a>
				<span class="m_texto">|</span>
				<a href=""><span class="m_texto">中文</span></a>
				<span class="m_texto">|</span>
				<a href=""><span class="m_textt">登录</span></a>
				<span class="m_text">您好，请您先</span>
			</div>
		</div>
		<div class="logokuai">
			<img src="<?php echo IMG_PATH;?>myimg/logo.png" alt="" class="logo">
						 
			<div class="daohang">
			
				<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=518b27e4401c7f5550d74a1f0b05c9bd&action=category&catid=0&num=10\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'category')) {$data = $content_tag->category(array('catid'=>'0','limit'=>'10',));}?>
				<?php $i=0?>
					<?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
					<?php $i++; ?>
					<?php if($i==1) { ?>
					<a href="<?php echo siteurl($siteid);?>" <?php if(!$catid) { ?>class="first"<?php } ?>><span class="ziys"><?php echo $r['catname'];?></span></a><?php } else { ?>
						 <a href="<?php echo $r['url'];?>" <?php if($r[catid]==$catid) { ?>class="first"<?php } ?>><span class="ziys"><?php echo $r['catname'];?></span></a>
						 <?php } ?>
					<?php $n++;}unset($n); ?>
					
				<?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
				
			</div>
		</div>
	</div>
	<script>
	$(document).ready(function(){
		$("daohang a").click(function(){
	$(".daohang").children().removeClass().end().find($(this)).addClass("first");
})
		})
	</script>