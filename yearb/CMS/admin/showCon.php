<?php
include "db.php";
include "session.php";
include "functions.php";
$tree=new abc();
$tree->tablec(0,$db,"shows");
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
<table border="1" cellpadding="0" cellspacing="0" align="center" width="600">
    <tr>
        <th>id</th>
        <th>标题</th>
        <th>内容</th>
        <th>父id</th>
        <th>发布时间</th>
        <th>发布人</th>
        <th>图片地址</th>
    </tr>
    <?php
    echo $tree->str;
    ?>
</table>
</body>
