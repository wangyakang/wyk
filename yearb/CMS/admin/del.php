<?php
include "db.php";
include "session.php";
include "functions.php";
$tree=new abc();
$id=$_GET["id"];
$tree->del($id,$db,"category");

