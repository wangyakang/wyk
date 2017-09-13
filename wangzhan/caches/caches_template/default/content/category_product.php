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
			<div class="title">
				<span class="title_left"><?php echo $v['catname'];?></span>
				<span class="xiao"><?php echo $v['catdir'];?></span>
				<div class="biaoti">
					<a href="<?php echo siteurl($siteid);?>">首页</a> > <?php echo $v['catname'];?>
				</div>
			</div>
			<div class="neirong_xinwen chanpin">
				<ul>
				<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=2fd402be87df8d9c106497fde52a0b5e&action=lists&catid=%24v%5Bcatid%5D&num=9&moreinfo=1&page=%24page\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'lists')) {$pagesize = 9;$page = intval($page) ? intval($page) : 1;if($page<=0){$page=1;}$offset = ($page - 1) * $pagesize;$content_total = $content_tag->count(array('catid'=>$v[catid],'moreinfo'=>'1','limit'=>$offset.",".$pagesize,'action'=>'lists',));$pages = pages($content_total, $page, $pagesize, $urlrule);$data = $content_tag->lists(array('catid'=>$v[catid],'moreinfo'=>'1','limit'=>$offset.",".$pagesize,'action'=>'lists',));}?>
				<?php $n=1;if(is_array($data)) foreach($data AS $v) { ?>
					<li>
						<a href="<?php echo $v['url'];?>"><img src="<?php echo $v['thumb'];?>" alt="" /></a>
						<a href="<?php echo $v['url'];?>"><p><?php echo $v['title'];?></p></a>
					</li>
				<?php $n++;}unset($n); ?>
				
				<?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
				</ul>
				<ul class="clear"></ul>
			</div>
			<div class="xian">
				<a href="index.php?m=content&c=index&a=lists&catid=23">首页</a>
				<?php echo $pages;?>
				<a href="index.php?m=content&c=index&a=lists&catid=23&page=3">尾页</a>
				<a>1/3页</a>
			</div>
		</div>			
	</div>
	<div class="clear">	</div>
<script>
	$(".a1").eq(0).remove()
</script>
			
	<!-- 品牌故事结束 -->
<?php include template("content" ,"footer"); ?>