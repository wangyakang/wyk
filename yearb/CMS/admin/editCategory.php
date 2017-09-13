<?php
include "db.php";
include "session.php";
$id=$_SESSION["id"];
$pid=$_GET["pid"];
$cname=$_GET["cname"];
$result=$db->query("update category set pid='$pid',cname='$cname' where cid=".$id);
if($db->affected_rows>0){
    $url="showCategory.php";
    $message="编辑成功";
    include "tishi.php";
}

