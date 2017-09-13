<?php
include  "header.php";
?>
<style>
    .con{
        width:800px;height:auto;
        overflow: hidden;
        border:1px solid #ccc;
        margin:auto;
        margin-top:20px;
    }
    .list{
        width:188px;
        height:190px;border:1px solid #000;
        margin-right:10px;
        margin-bottom:10px;
        text-align: center;
        line-height: 190px;
        float:left;
    }
</style>
<?php
$id=$_GET["id"];
$sql="select * from category where pid=".$id;
$result=$db->query($sql);
?>

<div class="con">
    <?php
    while ($row=$result->fetch_assoc()) {
        ?>
        <div class="list">

            <a href="list.php?id=<?php echo $row['cid']?>">

                <?php
                echo $row["cname"]
                ?>
            </a>

        </div>
        <?php
    }
    ?>

</div>
</body>
</html>