<?php
class main{
    function __construct(){
        $this->smarty=new Smarty();
        $this->smarty->setCompileDir("compile");  //创建编译目录
        $this->smarty->setTemplateDir("template");
        $this->session=new session();
    }
//    function checkLogin(){
//        $session=$this->session;
//        if(!($session->get("login"))&&MVC=="yes"){
//            $this->jump("index.php?m=admin&f=index&a=login","请登录");
//            return false;
//            exit;
//        }else{
////            header("location:index.php?m=admin");
//            return true;
//        }
//    }
    function jump($url,$message){
        $this->smarty->assign("url",$url);
        $this->smarty->assign("message",$message);
        $this->smarty->display("admin/message.html");
    }
}