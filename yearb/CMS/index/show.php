<?php
include  "header.php";
include "../admin/db.php";
$sid=$_GET["id"];
$sql="select * from shows where sid=".$sid;
$result=$db->query($sql);
$row=$result->fetch_assoc();
?>
<style>
    .list{
        width:800px;margin:auto;
        margin-top:30px;
    }
</style>

<ul class="list">
    <h1>
        <?php
        echo $row["stitle"]
        ?>
    </h1>
    <span>
      <?php
      echo $row["stime"]
      ?>
    </span>

    <p>
        <?php echo $row["scon"]?>
    </p>
</ul>

</body>
</html>
