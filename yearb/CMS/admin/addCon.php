<?php
    include "session.php";
    include "db.php";
    include "functions.php";
    $obj=new abc();
    $obj->tree(0,0,$db,"category","");
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<form action="addConInfo.php">
    所属分类：
    <select name="cid" id="">
        <option value="0">一级分类</option>
        <?php
            echo $obj->str;
        ?>
    </select> <br><br>
    标题：
    <input type="text" name="stitle"> <br><br>
    内容：
    <textarea name="scon" id="" cols="30" rows="10"></textarea>
    <input type="hidden" name="username">
    <input type="submit">
</form>
</body>
</html>
