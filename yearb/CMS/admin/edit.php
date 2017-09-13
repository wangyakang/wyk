<?php
include "session.php";
include "db.php";
include "functions.php";
$tree=new abc();
$id=$_GET["id"];
$tree->tree(0,0,$db,"category",$id);
$result=$db->query("select * from category where cid=".$id);
$row=$result->fetch_assoc();
$_SESSION["id"]=$id;
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
    <div class="box">
        <form action="editCategory.php">
            上级分类：
            <select name="pid" id="">
                <?php echo $tree->str;?>
            </select> <br>
            分类名称：<input type="text" name="cname" value="<?php echo $row['cname']; ?>"><br>
            <input type="submit">
        </form>
    </div>
</body>
</html>
