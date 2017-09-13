<?php
//echo ini_set("post_max_size","128");
//echo ini_get("post_max_size");获取传输文件大小的上限
//echo phpinfo();
    if (is_uploaded_file($_FILES["file"]["tmp_name"])){
//        echo $_FILES["file"]["name"];
        $name=$_FILES["file"]["name"];
        $url="aa/".$name;
        move_uploaded_file($_FILES["file"]["tmp_name"],$url);
    }
?>