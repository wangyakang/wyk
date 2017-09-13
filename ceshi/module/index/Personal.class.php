<?php
class Personal extends indexMain{
	function __construct(){
         parent::__construct();
         $this->db=new db("user");
    }
    function init(){
    	if(!$this->session->get("indexLogin")=="yes"){
            $this->smarty->display("index/login.html");
        }
    	$this->smarty->display("index/Personal.html");
    }
}
?>