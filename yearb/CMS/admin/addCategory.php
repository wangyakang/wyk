<?php
    include "db.php";
    include "session.php";
    include "functions.php";
    $tree=new abc();
    $tree->tree(0,0,$db,"category","");
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
<style>
    form{
        margin:  auto;
    }
    .box{
        text-align: left;
    }
    select,input{
        margin-top: 20px;
    }
</style>
<body>
<div class="box">
    <form action="addCategoryInfo.php">
        上级分类：
        <select name="pid" id="">
            <option value="0">一级分类</option>
            <?php echo $tree->str;?>
        </select> <br>
        分类名称：<input type="text" name="cname"><br>
        <input type="submit">
    </form>
</div>
</body>
</html>
