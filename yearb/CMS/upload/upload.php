<?php
//    $_FILES                //接收上传文件的信息
//    $_SERVER //获取服务器的信息
//var_dump($_FILES);   //打印文件
//echo "<pre>";
//echo ini_set("post_max_size","23")
//phpinfo()  输出php信息


//array (size=1)
//  'file' =>
//    array (size=5)
//      'name' => string '笔记整理 王亚康.html' (length=27)
//      'type' => string 'text/html' (length=9)
//      'tmp_name' => string 'E:\wamp\tmp\php9695.tmp' (length=23)
//      'error' => int 0
//      'size' => int 11949

if(is_uploaded_file($_FILES["file"]["tmp_name"])){
    $name=$_FILES["file"]["name"];
    $url="aa/".$name;
//    $name=substr($_FILES["file"]["name"],strrpos($_FILES["file"]["tmp_name"],"."));
//    if(($name==".html")&&$_FILES["file"]["size"]<1024*1024*2){
    move_uploaded_file($_FILES["file"]["tmp_name"],$url);
    //移动文件到目录
//    }else{
//        echo "格式有误";
//    }
}
//配置信息：php.ini
//post_max_size:上传最大字节
//upload_max_size:上传最大字节
