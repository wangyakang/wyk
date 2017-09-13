<?php
define("MVC","yes");
define("ROOT_URL",__DIR__);      //定义常量          _DIR_ 当前根目录      _FILE_:当前项目运行的文件
define("LIBS_URL",ROOT_URL."/libs");
define("TPL_INDEX_URL",ROOT_URL."template/index");
define("TPL_ADMIN_URL",ROOT_URL."template/admin");
define("HTTP_URL","http://".$_SERVER["SERVER_NAME"].substr($_SERVER["SCRIPT_NAME"],0,strrpos($_SERVER["SCRIPT_NAME"],"/"))); //http路径
define("FILE_URL","http://".$_SERVER["SERVER_NAME"].$_SERVER["SCRIPT_NAME"]);
define("CSS_PATH",HTTP_URL."/status/css");
define("IMG_PATH",HTTP_URL."/status/img");
define("JS_PATH",HTTP_URL."/status/js");
define("FONT_PATH",ROOT_URL."/status/font");
include LIBS_URL."/route.class.php";  //include  只能包含本地文件
include LIBS_URL."/db.class.php";
include LIBS_URL."/main.class.php";
include LIBS_URL."/code.class.php";
require LIBS_URL."/smarty/Smarty.class.php";
include LIBS_URL."/session.class.php";
$route=new route();
$route->init();
//var_dump($_SERVER); //打印服务器信息
