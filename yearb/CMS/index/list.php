<?php
include  "header.php";
include "../admin/db.php";
?>
<style>
    .list{
        width:800px;margin:auto;
        margin-top:30px;
    }
</style>

<ul class="list">
    <?php
    $id=$_GET["id"];
    $sql="select * from shows where cid=".$id;
    $result=$db->query($sql);
    while ($row=$result->fetch_assoc()) {
        ?>
        <li>
            <a href="show.php?id=<?php echo $row['sid']?>">
                <?php
                echo $row["stitle"]
                ?>
            </a>
        </li>
        <?php
    }
    ?>
</ul>


</body>
</html>