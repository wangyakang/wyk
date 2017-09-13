<?php
class index extends main{
//    1.进入后台首页
    function init(){
//        2.检验是否有权限
        include "template/admin/table.ejs";
//        if($this->checkLogin()){
//            $this->smarty->assign("aname",$this->session->get("an"));
//            $this->smarty->display("admin/table.ejs");
//            $this->session["coming"]="yes";   //表示进过主页
//        }
    }
    function login(){
//        3.进行登录
//        if($this->checkLogin()&&$this->session["coming"]){
//            header("location:index.php?m=admin");
//            exit;
//        }
        $this->smarty->display("admin/login.html");
    }
    function reg(){
        $this->smarty->display("admin/reg.html");
    }
    function code(){
        $code=new code();
        $code->width=100;
        $code->height=50;
        $code->fontFamily=FONT_PATH."/simsun.ttc";
        $code->output();
        $session=$this->session;
        $session->set("code",$code->resultLetter);
    }
    function check(){
        $code=@strtolower($_POST["code"]);  //屏蔽错误
        $session=$this->session;
        if($code!==$session->get("code")){
            $this->jump("index.php?m=admin&f=index&a=login","验证码错误");
            exit;
        }
        $aname=p("aname");
        $apass=md5(p("apass"));
        $db=new db("admin");
        $result=$db->select("ananme,apass");
        foreach ($result as $v){
            if($v["name"]==$aname){
                if($v["apass"]==$apass){
                    $session=$this->session;
                    $session->set("login","yes");
                    $session->set("aname",$aname);
                    $session->set("aid",$v["aid"]);
                    $this->jump("index.php?m=admin","登陆成功");
                }
            }
        }
        $this->jump("index.php?m=admin","登陆失败");
    }
    function logout(){
        $this->session->clear();
        $this->jump("index.php?m=admin&f=index&a=login","退出成功");
    }
}
