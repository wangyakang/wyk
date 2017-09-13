<?php
echo var_dump($_FILES);
if(is_uploaded_file($_FILES["file"]["tmp_name"])){
    $name=$_FILES["file"]["name"];
    $url="aa/".$name;
    move_uploaded_file($_FILES["file"]["tmp_name"],$url);
}