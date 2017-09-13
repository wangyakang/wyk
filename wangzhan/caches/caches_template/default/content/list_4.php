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
			<div class="liuyan_box">
				<form action="get" name="tijiao">
					<span>留言标题</span><input type="text" name="title" class="tijiaok"> <br>
					<span>您的姓名</span><input type="text" name="name" class="tijiaok"><br>
					<span>电子邮件</span><input type="text" name="email" class="tijiaok"><br>
					<span>联系方式</span><input type="text" name="content" class="tijiaok"><br>
					<div class="zailiu">
						<span>留言内容</span><textarea name="liuyan" id="liuyan" cols="30" rows="10"></textarea>
					</div>
				</form>
				<div class="tijiao_anniu"></div>
			</div>
		</div>
		<div class="clear">	</div>
	</div>
	<!-- 品牌故事结束 -->
<?php include template("content" ,"footer"); ?>




