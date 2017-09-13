<?php defined('IN_PHPCMS') or exit('No permission resources.'); ?><?php include template("content","header"); ?>
	<link rel="stylesheet" href="<?php echo CSS_PATH;?>mycss/base.css">
	<link rel="stylesheet" href="<?php echo CSS_PATH;?>mycss/main.css">
	<link rel="stylesheet" href="<?php echo CSS_PATH;?>mycss/tzzdl.css">
	<script src="<?php echo JS_PATH;?>myjs/jquery.min.js"></script>
	<script src="<?php echo JS_PATH;?>myjs/szcy.js"></script>
	<div class="bgbox">
		<div class="dlbox">
			<p>投资者登录</p>
			<div class="neirong">
				<div class="boxshuru">
					<p>用户名：</p>
					<input type="text">
				</div>
				<div class="boxshuru">
					<p>类型：</p>
					<div class="boxshuru_select"></div>
				</div>
				<div class="boxshuru">
					<p>密码：</p>
					<input type="password">
				</div>
				<div class="boxshuru">
					<p>验证码：</p>
					<input type="text">
				</div>
					<p class="diananniu">
						<a href="" class="tijiao">登录</a>
					</p>
			</div>
		</div>
	</div>
<?php include template("content","footer"); ?>
