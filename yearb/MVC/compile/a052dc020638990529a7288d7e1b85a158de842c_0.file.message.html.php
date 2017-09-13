<?php
/* Smarty version 3.1.30, created on 2017-03-04 03:03:15
  from "E:\wamp\www\yearb\MVC\template\admin\message.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_58ba20632ebaf2_35717526',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a052dc020638990529a7288d7e1b85a158de842c' => 
    array (
      0 => 'E:\\wamp\\www\\yearb\\MVC\\template\\admin\\message.html',
      1 => 1488592992,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_58ba20632ebaf2_35717526 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <title>message</title>
    <?php echo '<script'; ?>
 src="<?php echo JS_PATH;?>
/message.js"><?php echo '</script'; ?>
>
</head>
<style>
    body{
        background: #E4E8EB;
    }
    .box{
        width:400px;
        height: 200px;
        border-radius: 5px;;
        position:fixed;
        top:0;bottom:0;left:0;right:0;
        margin:auto;
        background:#eee;
        box-shadow: 0 0 10px #000000;
    }
    .jindu{
        width: 300px;;
        height: 15px;
        background: #95CEFF;
        margin-left:50px;
        position:relative;

    }
    .jindutiao{
        width:0px;
        height: 100%;;
        position:absolute;
        top:0;
        left: 0;
        background: #4D6C88;
    }
    .jindutiao span{
    }
    .box_top{
        width: 300px;
        height: 50px;
        padding:20px 50px 15px 50px;
        text-align: center;
        line-height: 50px;;
        color: ;
        font-size: 16px;
    }
    .box_bottom{
        width:130px;
        height: 25px;;
        background: #4AB0F8;;
        text-align: center;
        line-height: 25px;;
        border-radius: 10px;
        position: absolute;
        bottom:35px;
        right:35px;
    }
    .box_bottom a{
        color: #fff;
        font-size: 14px;;
    }
    .wenzi{
        width: 300px;;
        height: 15px;
        margin-left:50px;
        margin-top: 10px;
        text-align: center;
        line-height: 15px;
        color: #A9A9A9;
    }
</style>
<body>
<div class="box">
    <div class="box_top"><?php echo $_smarty_tpl->tpl_vars['message']->value;?>
</div>
    <div class="jindu">
        <div class="jindutiao"><span>0.00%</span></div>
    </div>
    <div class="wenzi">页面跳转中，请稍后...</div>
    <div class="box_bottom"><a href="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
">立即前往</a></div>
</div>
</body>
</html><?php }
}
