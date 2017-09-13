<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html;charset=UTF-8" />
	<title>登录</title>
</head>
<style>
	<style type="text/css" media="screen">
    @media screen and (max-width: 768px) {
        html {
            font-size: 30px!important;
        }
    }
    
    @media screen and (max-width: 420px) {
        html {
            font-size: 19px!important;
        }
    }
    
    @media screen and (max-width: 400px) {
        html {
            font-size: 18px!important;
        }
    }
    
    @media screen and (max-width: 320px) {
        html {
            font-size: 15px!important;
        }
    }
    
    body {
        padding: 0px;
        margin: 0px;
    }
    
    ul,
    li,
    a {
        padding: 0px;
        margin: 0px;
        list-style: none;
    }
    
    body {
        background-color: #fdfdfd !important;
        font-family: -apple-system, ".SFNSText-Regular", "Helvetica Neue", "Hiragino Sans GB", "WenQuanYi Micro Hei", "Microsoft Yahei", sans-serif;
    }
    
    .sign {
        max-width: 20rem;
	    min-width: 15rem;
	    margin: 14.4rem auto;
	    color: #333;
	    position: absolute;
	    left: 50%;
	    top: -47px;
	    margin-left: 179px;
    }
    
    .sign .section {
        background-color: #fff;
        border: 1px solid #ececec;
        border-radius: 2px;
        padding: 2rem 2.5rem;
    }
    
    .sign .section.form {
        width: 100%;
        height: 15rem;
    }
    
    .form-item {
        position: relative;
        width: 100%;
        height: auto;
        margin-bottom: 1.5rem;
        border-bottom: 1px solid #ececec;
    }
    .special{
    	border-bottom: none;
    }
    
    .form-item:first-child {
        margin-bottom: 1rem;
    }
    
    .form-item:last-child {
        border: none;
    }
    
    .form-item .form-input {
        margin: 0.5rem 0.4rem;
        font-size: 0.73rem;
        border: none;
        outline: none;
        box-shadow: none;
        -webkit-box-shadow: none;
        width: calc(100% - 70px);
    }
    
    .form-item .bot-bar {
        position: relative;
        height: 1px;
        width: 100%;
    }
    
    .bot-bar:before {
        position: absolute;
        bottom: -1px;
        left: 50%;
        content: "";
        height: 1px;
        width: 0px;
        background-color: #1B76C5;
        box-shadow: 1px 1px 3px rgba(255, 255, 255, 0.3);
        transition: width ease-in-out .35s;
        -moz-transition: width ease-in-out .35s;
        -o-transition: width ease-in-out .35s;
        -webkit-transition: width ease-in-out .35s;
    }
    
    .bot-bar:after {
        position: absolute;
        bottom: -1px;
        right: 50%;
        content: "";
        height: 1px;
        width: 0px;
        background-color: #1B76C5;
        transition: width ease-in-out .35s;
        -moz-transition: width ease-in-out .35s;
        -o-transition: width ease-in-out .35s;
        -webkit-transition: width ease-in-out .35s;
    }
    
    .form-item h2 {
        text-align: center;
        color: #5474db;
    }
    
    .form-item input:focus~.bot-bar:before {
        width: 50%;
    }
    
    .form-item input:focus~.bot-bar:after {
        width: 50%;
    }
    
    .form-item .icon {
        margin: 0.5rem 0.5rem;
        color: #5474db;
    }
    
    .form-item .info {
        color: red;
        position: absolute;
        right: 0px;
        font-size: 0.71rem;
    }
    
    .form-submit {
        position: relative;
        text-align: center;
        background-color: #617fde;
        border-radius: 5px;
        overflow: hidden;
        padding: 0.3rem;
        color: aliceblue;
        letter-spacing: 0.1rem;
        cursor: pointer;
        line-height: 1.6rem;
        font-size: 0.9rem;
        height: 1.6rem;
        transition: all ease-in-out .35s;
        -moz-transition: all ease-in-out .35s;
        -o-transition: all ease-in-out .35s;
        -webkit-transition: all ease-in-out .35s;
        width: 205px;
   		height: 34px;
    	margin: 2px 18px;
    }
    
    .form-submit:hover {
        font-size: 1.2rem;
        background-color: #5474db;
    }
    
    .icon-mobile-phone:before {
        font-size: 2rem;
    }
    
    .icon-user-md:before {
        font-size: 1.2rem;
    }
    a{
    	text-decoration: none;
    	color:#5474db;
    }
    .img img{
    	position: relative;
    	width: 100%;
    	height: 100%;
    }
    </style>
</style>
<body>
	<div class="sign">
        <div class="section">
            <form id="form" action="checkLogin.php" method="post">
                <div class="form-item">
                    <h2>登录页</h2>
                </div>
                <div class="form-item"><i class="icon-user-md icon"></i>
                    <input v-model="user.name" v-on:click="input_focus()" type="text" class="form-input" autocomplete="off" name="username" placeholder="账户姓名">
                    <div class="bot-bar"></div> 
                </div>
                <div class="form-item"><i class="icon-mobile-phone icon"></i>
                    <input v-model="user.phone" v-on:click="input_focus()" type="password" class="form-input" autocomplete="off" name="password" placeholder="账户密码">
                    <div class="bot-bar"></div>
                </div>
                <div class="form-item special">
                    <input type="submit" value="登录" class="form-submit" data-txt="Login"/>
                </div>
                <span>
                	还没注册？去
                	<a href="reg.php">注册</a>
                </span>
            </form>
        </div>
    </div>
</body>
</html>