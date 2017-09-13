<?php
    session_start();
    unset($_SESSION["is_login"]);
    unset($_SESSION["username"]);
    $message="返回登录页";
    $url="login.php";
    include "tishi.php";