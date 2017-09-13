<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?><?php include template("content","header"); ?>
	<link rel="stylesheet" href="<?php echo CSS_PATH;?>mycss/base.css">
	<link rel="stylesheet" href="<?php echo CSS_PATH;?>mycss/main.css">
	<link rel="stylesheet" href="<?php echo CSS_PATH;?>mycss/style1.css">
	<script src="<?php echo JS_PATH;?>myjs/jquery.min.js"></script>
	<script src="<?php echo JS_PATH;?>myjs/szcy.js"></script>
	
	<!-- banner -->
	<div id="m_b_box">
		<ul class="m_banner">
			<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=b0d4763769299fb8fb9b0b383d828b7d&action=lists&catid=36&num=3\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'lists')) {$data = $content_tag->lists(array('catid'=>'36','limit'=>'3',));}?>
			<?php $i=0?>
			<?php $n=1;if(is_array($data)) foreach($data AS $v) { ?>
			<?php $i++; ?>
			<li <?php if($i==1) { ?>class="firstd"<?php } ?>><img src="<?php echo $v['thumb'];?>" alt=""></li>
			<?php $n++;}unset($n); ?>
			<?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
		</ul>
		<ul class="dian">
			<li class="firstd"></li>
			<li></li>
			<li></li>
		</ul>
		<div class="tiao">
			<div class="laba"><img src="<?php echo IMG_PATH;?>myimg/laba.png" alt=""></div>
		</div>
	</div>
	
	
	<!-- 正文-->
	<div class="ipbox">
		<div class="jianjie">
			<div class="tu1">
				<img src="<?php echo IMG_PATH;?>myimg/hxjz.jpg" alt="">
			</div>
			<div class="jjkuang">
				<div class="jjtop">
					<img src="<?php echo IMG_PATH;?>myimg/bsj.jpg" alt="" class="jjsj">
					<img src="<?php echo IMG_PATH;?>myimg/gsjj_01.png" alt="" class="tu2">	
					<span class="dongtai">公司简介</span>
					<a href="http://localhost/lxmweb/index.php?m=content&c=index&a=lists&catid=10">MORE</a>
			 	</div>
			 	<div class="wenben">
			 		<img src="<?php echo IMG_PATH;?>myimg/sy_01.png" alt="" class="yin1">
			 		<img src="<?php echo IMG_PATH;?>myimg/sy_02.png" alt="" class="yin2">
			 		<p> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;深圳市创新投资集团有限公司是深圳市政府于1999年8月发起成立的专<br>业从事创业投资的有限责任公司。成立以来一直致力于培育民族产业、塑造<br>民族品牌、促进经济转型升级和新兴产业发展，目前已发展成为国内实力最<br>强、影响力最大的本土创业投资公司。</p>
			 	</div>
			</div>
		</div>
	</div>
	<!-- 正文2 -->
	<div class="ipbox2">
		<div class="left_box">
			<div class="lefttop">
				<img src="<?php echo IMG_PATH;?>myimg/bsj.jpg" alt="" class="jjsj1">
				<img src="<?php echo IMG_PATH;?>myimg/gsjj_02.png" alt="" class="tu3">
				<span class="dongtai">新闻聚焦</span>
				<a href="http://www.szvc.com.cn/main/news/groupNews/index.shtml">MORE</a>
			</div>
			<div class="szyan">
				<dt><img src="<?php echo IMG_PATH;?>myimg/szhtds1.jpg" alt=""></dt>
			<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=a2a1f3b148d9e21194295ec57d139a98&action=lists&catid=38&num=1\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'lists')) {$data = $content_tag->lists(array('catid'=>'38','limit'=>'1',));}?>
				<?php $n=1;if(is_array($data)) foreach($data AS $q) { ?>
					<dd>
						<div><a href=""><?php echo $q['title'];?></a></div>     
						<div><a href="" class="riqi"><?php echo date('Y-m-d');?></a></div>     
					</dd>
				<?php $n++;}unset($n); ?>
			<?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>	
			</div>
			<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=1a73566b9a8894399a1c2fe0558c9726&action=lists&catid=9&num=5\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'lists')) {$data = $content_tag->lists(array('catid'=>'9','limit'=>'5',));}?>
			<?php $n=1;if(is_array($data)) foreach($data AS $q) { ?>
			<li>
				<a href="<?php echo $q['url'];?>" class="xiaoguo"><?php echo $q['title'];?><span><?php echo date('Y-m-d');?></span></a>
			</li>
			<?php $n++;}unset($n); ?>
			<?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
		</div>
		<div class="right_box">
			<div class="righttop">
				<img src="<?php echo IMG_PATH;?>myimg/bsj.jpg" alt="" class="jjsj1">
				<img src="<?php echo IMG_PATH;?>myimg/gsjj_05.png" alt="" class="tu4">
				<span class="dongtai">创投研究</span>
				<a href="http://localhost/lxmweb/index.php?m=content&c=index&a=lists&catid=12">MORE</a>
			</div>
			<ul class="studylist">
				<div class="studly">
					<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=66ede553e75d56b2aeb801992c9abde1&action=lists&catid=39&num=1\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'lists')) {$data = $content_tag->lists(array('catid'=>'39','limit'=>'1',));}?>
				<?php $n=1;if(is_array($data)) foreach($data AS $q) { ?>
					<dd>
						<li><a href=""><?php echo $q['title'];?></a></li>      
					</dd>
					<dd><img src="<?php echo IMG_PATH;?>myimg/xwbz.png" alt=""></dd>
				</div>
				<?php $n++;}unset($n); ?>
			<?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>	
			<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=f45adbf8fb42b1fb0358670782bf69e2&action=lists&catid=37&num=5\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'lists')) {$data = $content_tag->lists(array('catid'=>'37','limit'=>'5',));}?>
				<?php $n=1;if(is_array($data)) foreach($data AS $q) { ?>
					<li>
						<a href="<?php echo $q['url'];?>" class="xiaoguo"><?php echo $q['title'];?></a>
					</li>
				<?php $n++;}unset($n); ?>
			<?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
			</div>	
			</ul>
		</div>
	</div>
	<!-- 正文2 -->
	<div class="ipbox2">
		<div class="left_box">
			<div class="lefttop">
				<img src="<?php echo IMG_PATH;?>myimg/bsj.jpg" alt="" class="jjsj3">
				<img src="<?php echo IMG_PATH;?>myimg/gsjj_04.png" alt="" class="tu3">
				<span class="dongtai">投资企业动态</span>
				<a href="http://www.szvc.com.cn/main/news/tzqydt/index.shtml">MORE</a>
			</div>
			<div class="investmet">
			<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=8b203a2641f3e5ee1a2240a05ca908dc&action=lists&catid=40&num=10\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'lists')) {$data = $content_tag->lists(array('catid'=>'40','limit'=>'10',));}?>
				<?php $n=1;if(is_array($data)) foreach($data AS $q) { ?>	
				<li>
					<a href=""><?php echo $q['title'];?><span><?php echo date('Y-m-d');?></span></a>
				</li>
				<?php $n++;}unset($n); ?>
			<?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>	
			</div>
		</div>
		<div class="right_box">
			<div class="righttop">
				<img src="<?php echo IMG_PATH;?>myimg/bsj.jpg" alt="" class="jjsj1">
				<img src="<?php echo IMG_PATH;?>myimg/gsjj_05.png" alt="" class="tu4">
				<span class="dongtai">政策法规</span>
				<a href="http://www.szvc.com.cn/main/ctyj/professionalTeam/zcfg/index.shtml">MORE</a>
			</div>
			<ul class="studylist1">
				<?php if(defined('IN_ADMIN')  && !defined('HTML')) {echo "<div class=\"admin_piao\" pc_action=\"content\" data=\"op=content&tag_md5=6046be86eaa755e913a28ecdd05331b3&action=lists&catid=41&num=10\"><a href=\"javascript:void(0)\" class=\"admin_piao_edit\">编辑</a>";}$content_tag = pc_base::load_app_class("content_tag", "content");if (method_exists($content_tag, 'lists')) {$data = $content_tag->lists(array('catid'=>'41','limit'=>'10',));}?>
				<?php $n=1;if(is_array($data)) foreach($data AS $q) { ?>
				<a href=""><li><?php echo $q['title'];?></li></a>
				<?php $n++;}unset($n); ?>
				<?php if(defined('IN_ADMIN') && !defined('HTML')) {echo '</div>';}?>
			</ul>
			
		</div>
	</div>
	
	
	
	<!-- 二维码 -->
	<div class="erweima">
		<img src="<?php echo IMG_PATH;?>myimg/szvc.jpg" alt="">
	</div>
<?php include template("content","footer"); ?>