<?php
class comment extends indexMain{
	function __construct(){
         parent::__construct();
         $this->db=new db("user");
    }
    function init(){
    	$this->smarty->display("index/comment.html");
    }
}
?>