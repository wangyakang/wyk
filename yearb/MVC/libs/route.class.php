<?php
//路由
//$_REQUEST   //接收get、post请求
class route{
    private static $moudel;   //模块，功能的整合
    private static $file;
    private static $action;
    function init(){
        $this->getInfo();
    }
    function getInfo(){
        self::$moudel=isset($_REQUEST["m"])&&!empty($_REQUEST["m"])?$_REQUEST["m"]:"index";
        self::$file=isset($_REQUEST["f"])&&!empty($_REQUEST["f"])?$_REQUEST["f"]:"index";
        self::$action=isset($_REQUEST["a"])&&!empty($_REQUEST["a"])?$_REQUEST["a"]:"init";
        $file="module/".self::$moudel."/".self::$file.".class.php";
        if(is_file($file)){
            include $file;
            if(class_exists(self::$file)){
                $obj=new self::$file();
                if(method_exists($obj,self::$action)){
                    $method=self::$action;
                    $obj->$method();
                }else{
                    echo self::$action."方法不存在";
                }
            }else{
                echo self::$file."类不存在";
            }
        }else{
            echo  self::$file."文件不存在";
        }
    }
}