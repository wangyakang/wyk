<?php
include  "db.php";
include "session.php";
$cid=$_GET["cid"];
$stitle=$_GET["stitle"];
$scon=$_GET["scon"];
$username=$_SESSION["username"];
$sql="insert into shows (stitle,scon,cid,username) values ('$stitle','$scon','$cid','$username')";
$db->query($sql);
if($db->affected_rows>0){
    $url="showCon.php";
    $message="添加成功";
    include "tishi.php";
}