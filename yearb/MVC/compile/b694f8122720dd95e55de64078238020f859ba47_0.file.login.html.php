<?php
/* Smarty version 3.1.30, created on 2017-03-04 02:34:27
  from "E:\wamp\www\yearb\MVC\template\admin\login.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_58ba19a304a726_45876486',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b694f8122720dd95e55de64078238020f859ba47' => 
    array (
      0 => 'E:\\wamp\\www\\yearb\\MVC\\template\\admin\\login.html',
      1 => 1488591266,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_58ba19a304a726_45876486 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <title>登录</title>
</head>
<style>
    body{
        background: #022251;
    }
    .box{
        width:300px;
        height: 300px;
        border:1px solid #333;
        position:fixed;
        top:0;bottom:0;left:0;right:0;
        margin:auto;
        background:#fff;
        text-align: center;
        border-radius: 2px;
        box-shadow: 0 0 5px #333;
        color: #5e5e5e;
    }
    .shuru{
        color:#20739B;
        height: 50px;
        line-height: 50px;
        font-size: 18px;
        margin:25px 0 15px;
    }
    .qx{
        color:#666;
        font-size: 13px;
        position: absolute;
        right:0;
        top:0;
    }
    .one{
        width: 200px;
        height: 30px;
        padding-left: 10px;
        border:1px solid #C6BFBF;
        margin-bottom: 15px;
    }
    .two{
        width: 200px;
        margin:10px 50px;
        position: relative;
    }
    .two select{
        position: absolute;
        left:0;
        top:0;
    }
    #dl{
        width: 180px;
        height: 28px;
        background: #345BAA;
        color: #fff;
        font-size: 14px;
        border:none;
        position: absolute;
        bottom:10px;
        left:60px;
        cursor: pointer;
    }
    #code{
        width:80px;
        margin-left: -20px;
    }
    .codeimg{
        width: 100px;;
        height: 30px;;
    }
</style>
<body>
<div class="box">
    <form action="index.php?m=admin&f=index&a=check" method="POST">
        <div class="shuru">账号登录</div>
        <input type="text" name="aname" class="one" placeholder="账号" autocomplete="off" value=""/>
        <input type="password" name="apass" class="one" placeholder="密码" autocomplete="off" value="" /><br />
        <input type="text" name="code" id="code" value=""/>
        <img src="index.php?m=admin&f=index&a=code" alt="" onclick="this.src='index.php?m=admin&f=index&a=code&'+Math.random()" class="codeimg"/>
        <div class="two">
            <select name="role" id="">
                <option value="0">会员</option>
                <option value="1">管理员</option>
            </select>
        </div>
        <input type="submit" value="登录" id="dl"/>
    </form>
</div>
</body>
</html><?php }
}
