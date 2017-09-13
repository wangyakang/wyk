<?php
    include "db.php";
    include "session.php";
    include "functions.php";
    $tree=new abc();
    $tree->table(0,0,$db,"category");
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
    <table border="1" cellpadding="0" cellspacing="0" align="center" width="300">
        <tr>
            <th>id</th>
            <th>分类名称</th>
            <th>父id</th>
            <th>操作</th>
        </tr>
        <?php
            echo $tree->str;
        ?>
    </table>
</body>
</html>