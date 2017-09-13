<?php
class login extends indexMain{
	function __construct(){
		parent::__construct();
        $this->db=new db("user");
    }
	function init(){
		$this->smarty->display("index/login.html");
	}
	function check(){
		$uname=$_POST["user"];
        $upass=md5($_POST["pass"]);
        $result=$this->db->select();
        foreach ($result as $v){
            if($v["uname"]==$uname){
                if($v["upass"]==$upass){
					$this->session->set("indexLogin","yes");
					$this->smarty->display("index/Personal.html");
					exit;
            	}
        	}
    	}
    	echo "用户名或密码错误";
   	}
}