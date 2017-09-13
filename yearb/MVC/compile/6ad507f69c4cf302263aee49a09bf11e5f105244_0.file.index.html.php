<?php
/* Smarty version 3.1.30, created on 2017-03-02 06:02:26
  from "E:\wamp\www\yearb\MVC\template\index\table.ejs" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_58b7a76264d0a1_20476340',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6ad507f69c4cf302263aee49a09bf11e5f105244' => 
    array (
      0 => 'E:\\wamp\\www\\yearb\\MVC\\template\\index\\table.ejs',
      1 => 1488425531,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_58b7a76264d0a1_20476340 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>前台</title>
    <link rel="stylesheet" href="<?php echo CSS_PATH;?>
/index.css">   <!-- 动态监测路径-->
</head>
<body>
<!--前台  界面-》逻辑分开-->
<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['result']->value, 'v');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['v']->value) {
?>
<li><?php echo $_smarty_tpl->tpl_vars['v']->value["cname"];?>
</li>
<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

</body>
</html><?php }
}
