<?php
    include "db.php";
    $username=$_GET["username"];
    $sql="select username from denglu";
    $result=$db->query($sql);
    while ($row=$result->fetch_assoc()){
        if($username==$row["username"]){
            echo "erro";
            exit;
        }
    }
echo "ok";