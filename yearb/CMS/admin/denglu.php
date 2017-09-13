<?php
    session_start();
    include "db.php";
    $username=$_POST["username"];
    $password=md5($_POST["password"]);
    $result=$db->query("select * from denglu");
while ($row=$result->fetch_assoc()){
    if($row["username"]=="$username"){
        if($row["password"]=="$password"){
            if(!isset($_SESSION["is_login"])){
                    $message="登陆成功";
                    $_SESSION["is_login"]="ok";
                    $_SESSION["username"]="$username";
                    $url="main.php";
                    include "tishi.php";
                    exit;
                }
            }
        }
    }
    $message="登录失败";
    $url="login.php";
    include "tishi.php";