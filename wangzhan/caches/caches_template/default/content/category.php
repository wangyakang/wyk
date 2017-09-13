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
				<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=726afab9ad60c6d5d36b2711b7826082&action=category&catid=%24catid&num=10\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'category')) {$data = $content_tag->category(array('catid'=>$catid,'limit'=>'10',));}?>
					<?php $n=1;if(is_array($data)) foreach($data AS $v) { ?>
						<li><a href="<?php echo $v['url'];?>"><?php echo $v['catname'];?></a></li>
					<?php $n++;}unset($n); ?>
				<?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
			</ul>
		</div>
		<div class="right">
			<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=251742a83f61bb72aab15a999bdbd2bc&action=lists&catid=%24v%5Bcatid%5D&num=4&moreinfo=1\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'lists')) {$data = $content_tag->lists(array('catid'=>$v[catid],'moreinfo'=>'1','limit'=>'4',));}?>
				<?php $n=1;if(is_array($data)) foreach($data AS $v) { ?>
					<div class="title">
						<span class="title_left"><?php echo $v['title'];?></span>
						<span class="xiao"><?php echo $v['copyfrom'];?></span>
						<div class="biaoti">
							<a href="<?php echo siteurl($siteid);?>">首页</a> > <?php echo $v['title'];?>
						</div>
					</div>
					<div class="neirong">
						<p class="hanggao"><?php echo $v['content'];?></p>
					</div>
				<?php $n++;}unset($n); ?>
			<?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
			</div>			
		</div>
		<div class="clear">	</div>
	<!-- 品牌故事结束 -->
<?php include template("content" ,"footer"); ?>

