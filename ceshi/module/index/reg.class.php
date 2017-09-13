<?php
class reg extends indexMain{
	function __construct(){
		parent::__construct();
        $this->db=new db("user");
    }
	function init(){
		$this->smarty->display("index/reg.html");
	}
	function ajax(){
           $uname=$_POST["uname"];
           $result=$this->db->select("uname");

           foreach ($result as $v){
                if($v["uname"]==$uname){
                    echo "false";
                    exit;
                }
           }
        echo "true";
    }
	function addReg(){
		$uname=$_POST["uname"];
        $upass=md5($_POST["upass"]);
        if($this->db->insert("uname='$uname';upass='$upass'")>0){
        	echo "注册成功";
        	$this->smarty->display("index/login.html");
        }else{
        	echo "注册失败";
        }

	}
}
?>