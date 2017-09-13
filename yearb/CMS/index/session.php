<?php
    session_start();
    if(!$_SESSION["is_login"]){
        $message="请登录";
        $url="login.php";
        include "tishi.php";
    }