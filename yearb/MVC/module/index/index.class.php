<?php
class index{
    function init(){
        $smarty=new Smarty();
        $smarty->setCompileDir("compile");  //创建编译目录
        $smarty->setTemplateDir("template");
        $db=new db("category");
        $result=$db->select();
        $smarty->assign("result",$result);  //分配
        $smarty->display("index/table.ejs"); //前台页面
    }
}