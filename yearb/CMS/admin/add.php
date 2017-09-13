<?php
include "db.php";
$username=$_POST["username"];
$password=md5($_POST["password"]);
if($username==""){
    echo "非法操作";
    exit;
}
$result=$db->query("insert inito denglu (username,password,role) values ('$username','$password','1')");
if($db->affected_rows>0){
    $url="login.php";
    $message="注册成功";
    include "tishi.php";
}
