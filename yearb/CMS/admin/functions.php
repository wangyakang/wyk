<?php
class abc{
    function abc(){
        $this->str="";
    }
    function tree($pid,$flag,$db,$table,$current=null){
        if($current) {
            $result1 = $db->query("select * from $table where cid=".$current);
            $row1 = $result1->fetch_assoc();
            $currentPid = $row1["pid"];
        }
        $flag++;
        $sql="select * from $table where pid=".$pid;
        $result=$db->query($sql);
        while($row=$result->fetch_assoc()){
            $cid=$row["cid"];
            $str=str_repeat("-",$flag);
            if($current && $currentPid==$cid){
                $this->str.="<option value='$currentPid' selected='selected'>{$str}{$row["cname"]}</option>";
            }else {
                $this->str .= "<option value='$cid'>{$str}{$row['cname']}</option>";
                $this->tree($row["cid"], $flag, $db, $table, $current);
            }
        }
        return $this->str;
    }
    function table($pid,$flag,$db,$table){
        $sql = "select * from $table where pid=" . $pid;
        $result = $db->query($sql);
        $flag++;
        while ($row = $result->fetch_assoc()) {
            $cid = $row["cid"];
            $str = str_repeat("-", $flag);
            $cname = $row["cname"];
            $pid = $row["pid"];
            $this->str .= "<tr>
                           <td>$cid</td>
                           <td>$str  $cname</td>
                           <td>$pid</td>
                           <td>
                                <a href='del.php?id=$cid'>删除</a>
                                <a href='edit.php?id=$cid'>编辑</a>
                           </td>
                         </tr>";
            $this->table($row["cid"], $flag, $db, $table);
        }
        return $this->str;
    }
    function del($id,$db,$table){
        $sql="select * from $table where pid=".$id;
        $result=$db->query($sql);
        if($result->fetch_assoc()){
            $message="该栏目有子类，请先删除子类";
            $url="showCategory.php";
            include  "tishi.php";
        }else{
            $sql="delete from $table where cid=".$id;
            $db->query($sql);
            if($db->affected_rows>0){
                $message="删除分类成功";
                $url="showCategory.php";
                include  "tishi.php";
            }
        }
    }
    function tablec($flag,$db,$table){
        $sql = "select * from $table" ;
        $result = $db->query($sql);
        while ($row = $result->fetch_assoc()) {
            $cid = $row["cid"];
            $scon=$row["scon"];
            $stitle=$row["stitle"];
            $stime=$row["stime"];
            $sid = $row["sid"];
            $username=$row["username"];
            $this->str .= "<tr>
                           <td>$sid</td>
                           <td>$stitle</td>
                           <td> $scon</td>
                           <td>$cid</td>
                           <td>$stime</td>
                           <td>$username</td>
                           <td>
                                <a href='delCon.php?id=$cid'>删除</a>
                                <a href='editCon.php?id=$cid'>编辑</a>
                           </td>
                         </tr>";
        }
        return $this->str;
    }
}
