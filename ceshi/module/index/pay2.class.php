<?php
class pay2 extends indexMain{
	function __construct(){
         parent::__construct();
         $this->db=new db("user");
    }
    function init(){
    	$this->smarty->display("index/pay2.html");
    }
    function pay3(){
    	$this->smarty->display("index/pay3.html");
    }
}
?>