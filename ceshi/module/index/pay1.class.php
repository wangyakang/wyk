<?php
class pay1 extends indexMain{
	function __construct(){
         parent::__construct();
         $this->db=new db("user");
    }
    function init(){
    	$this->smarty->display("index/pay1.html");
    }
}
?>