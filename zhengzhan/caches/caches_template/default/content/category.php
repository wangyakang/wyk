<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?><?php include template("content","header"); ?>
	<link rel="stylesheet" href="<?php echo CSS_PATH;?>mycss/base.css">
	<link rel="stylesheet" href="<?php echo CSS_PATH;?>mycss/main.css">
	<link rel="stylesheet" href="<?php echo CSS_PATH;?>mycss/style.css">
	<script src="<?php echo JS_PATH;?>myjs/jquery.min.js"></script>
	<script src="<?php echo JS_PATH;?>myjs/erjiye.js"></script>


<div class="nybanner">
		<img src="<?php echo $CATEGORYS[$top_parentid]['image'];?>" alt="">
	</div>
<div class="inpage_main">
		<ul class="about_left">
			<div class="caption">
				<!--<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=35f92eaa8c2e576132f60af3169b0e9f&action=category&catid=%24CAT%5Bparentid%5D&num=1\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'category')) {$data = $content_tag->category(array('catid'=>$CAT[parentid],'limit'=>'1',));}?>-->
				<!--<?php $n=1;if(is_array($data)) foreach($data AS $v) { ?>-->
				<p><?php echo $CATEGORYS[$top_parentid]['catname'];?></p>
				<a href="">about us</a>
				<!--<?php $n++;}unset($n); ?>-->
				<!--<?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>-->
			</div>
			<ul class="captionmenu">
				<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=7ea4d65b7be24dceb41d598aae886999&action=category&catid=%24catid&order=id+ASC&num=20\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'category')) {$data = $content_tag->category(array('catid'=>$catid,'order'=>'id ASC','limit'=>'20',));}?>
				<?php $i=0?>
					<?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
					<?php $i++; ?>
					<?php if($i==6) { ?>
					<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=225b463f797e38952a739bf87f1bbb50&action=category&catid=21&order=id+ASC&num=1\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'category')) {$data = $content_tag->category(array('catid'=>'21','order'=>'id ASC','limit'=>'1',));}?>
							<?php $n=1;if(is_array($data)) foreach($data AS $q) { ?>
						<div class="qitaleibox">
							<a href="javascriptvoid:(0)" class="us"><?php echo $r['catname'];?></a>	 
						</div>
						<div class="dier">
							<div class="diera" id="company_honor" svalue="company_honor">
							 	<a href="<?php echo $q['url'];?>">><?php echo $q['catname'];?></a>
							</div>
						</div>
						<?php $n++;}unset($n); ?>
						<?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
						<?php } else { ?>
						<li class="chushise"><a href="<?php echo $r['url'];?>"><?php echo $r['catname'];?></a></li>
						
						<?php } ?>
					<?php $n++;}unset($n); ?>		
				<?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
				
				<!--<?php echo $catid;?>
				<?php echo $v['catid'];?>
				<?php echo $v['catname'];?>
				<?php echo $r['catid'];?>
				<?php echo $r['catname'];?>-->
			</ul>
			
		</ul>
	<ul class="fanyea">
		<li class="first1">
			<div class="aboutus_right">
			<div class="profietop">
			<div class="pagposit"><a href="<?php echo siteurl($siteid);?>" style="color:#999;">首页</a><span>/</span><span><?php echo $CATEGORYS[$top_parentid]['catname'];?></span><span>/</span><span><?php echo $CATEGORYS[$catid]['catname'];?></span>
				
			</div>
            	<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=733b69af398465d45ad65f9c682baf6f&action=lists&catid=%24catid&num=1&moreinfo=1\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'lists')) {$data = $content_tag->lists(array('catid'=>$catid,'moreinfo'=>'1','limit'=>'1',));}?>
				<?php $n=1;if(is_array($data)) foreach($data AS $r) { ?>
                	<h3><?php echo $r['title'];?></h3>
           	</div>
       
                	 <div class="procontent">
                	 	<p class="chushizi"><?php echo $r['content'];?></p>
                	 </div>
                <?php $n++;}unset($n); ?>
 				<?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
           </div>
    </li>
	</ul>
			
</div>
<?php include template("content","footer"); ?>