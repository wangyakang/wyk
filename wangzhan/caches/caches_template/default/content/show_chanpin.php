<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?><?php include template("content" ,"header"); ?>
<!-- banner -->
	<div class="pinpai_banner dis">
		<div class="gushi_out">
			<div class="gushi_box">
				<img src="<?php echo IMG_PATH;?>myimg/zy_banner.png" alt="">
			</div>
		</div>
	</div>
<!-- banner结束 -->
	<!-- 品牌故事 -->
	<div class="gushi_neirong">
		<div class="left">
			<ul>
				<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=44a0faccc9a2a2635692dd686097163c&action=category&catid=%24top_parentid&num=10\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'category')) {$data = $content_tag->category(array('catid'=>$top_parentid,'limit'=>'10',));}?>
					<?php $n=1;if(is_array($data)) foreach($data AS $v) { ?>
						<li><a href="<?php echo $v['url'];?>"><?php echo $v['catname'];?></a></li>
					<?php $n++;}unset($n); ?>
				<?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
			</ul>
		</div>
		<div class="right">
			<div class="title">
				<span class="title_left"> <?php echo $v['catname'];?></span>
				<span class="xiao"> <?php echo $v['catdir'];?></span>
				<div class="biaoti">
					<a href="<?php echo siteurl($siteid);?>">首页</a> > <?php echo $CATEGORYS[$top_parentid]['catname'];?>
				</div>
			</div>
			<div class="neirong_xinwen">
				<p class="yuedu_xuedi"><?php echo $title;?></p>
				<div class="word_xinwen xq_img">
					<?php echo $content;?>
				</div>
			</div>
			<div class="xian_suoming">
				<a href="<?php echo $previous_page['url'];?>"><p>上一条：<?php echo $previous_page['title'];?></p></a>
				<a href="<?php echo $next_page['url'];?>">下一条：<?php echo $next_page['title'];?></a>
			</div>
		</div>
		<div class="clear">	</div>
	</div>
	
	<!-- 品牌故事结束 -->
<?php include template("content" ,"footer"); ?>



