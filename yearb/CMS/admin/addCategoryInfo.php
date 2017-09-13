<?php
    include "db.php";
    include "session.php";
    $pid=$_GET["pid"];
    $cname=$_GET["cname"];
    $db->query("insert into category (cname,pid) values ('$cname','$pid')");
    if($db->affected_rows>0){
        $message="添加成功";
    }else{
        $message="添加失败";
    }
    $url="addCategory.php";
    include "tishi.php";