<?php
class xiangqing extends indexMain{
	function __construct(){
         parent::__construct();
         $this->db=new db("user");
    }
    function init(){
    	$this->smarty->display("index/xiangqing.html");
    }
}
?>