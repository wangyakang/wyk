<?php
class db{
    public $hostname="localhost";       //公共参数可进行修改，传参
    public $dbname="guanli";
    public $tablename;
    private $username="root";
    private $password="";
    private $connect;
    public $fileds;    //存储数值，数组，保存字段
//    晚绑定    弱类型
    function __construct($tablename){
        $this->tablename=empty($tablename)?"demo":$tablename;
        $this->config();
    }
    function config(){
        $this->connect= new mysqli($this->hostname, $this->username, $this->password, $this->dbname);
        if (mysqli_connect_error()) {
            echo "连接失败";
            $this->connect->close();
            exit;
        }
        $this->connect->query("set names utf8");
        $this->fileds["filed"] = $this->fileds["filed"] ? $this->fileds["filed"] : "*";
        $this->fileds["where"] = $this->fileds["order"] = $this->fileds["limit"] = "";
    }
    public function select($opt=""){
        $sql=empty($opt)?"select ".$this->fileds["filed"]." from ".$this->tablename.$this->fileds["where"]."".$this->fileds["order"]." ".$this->fileds["limit"]:$opt;
        $result=$this->connect->query($sql);
        $array=array();
        while ($row=$result->fetch_assoc()){
            $array[]=$row;
        }
        return $array;
    }
    public function where($opt=""){       //where语句
        $sql=empty($opt)?"":" where ".$opt;
        $this->fileds["where"]=$sql;
        return $this;
    }
    public function order($opt=""){       //order语句
        $sql=empty($opt)?"":" order  by ".$opt;
        $this->fileds["order"]=$sql;
        return $this;
    }
    public function limit($opt=""){       //limit语句
        $sql=empty($opt)?"":" limit  by ".$opt;
        $this->fileds["limit"]=$sql;
        return $this;
    }
    public function update($opt=""){
        $sql=empty($opt)?"update ".$this->tablename." set ".$this->fileds["filed"]."".$this->fileds["where"]:$opt;
        echo $sql;
        $this->connect->query($sql);
        return $this->connect->affected_rows;
    }
    public function delete($opt=""){
//        if(strrpos($opt,"select"))
        $sql=empty($opt)?"delete from ".$this->tablename." ".$this->fileds["where"]:$opt;
        $this->connect->query($sql);
        return $this->connect->affected_rows;
    }
    public function insert($opt=""){
        if(empty($opt)){
            $str="insert into ".$this->tablename." ".$this->fileds["filed"]."".$this->fileds["where"];
        }else{
            if(strrpos($opt,";")){
//               $this->fileds["filed"];
                $str="insert into ".$this->tablename." ".$this->fileds["filed"]."".$this->fileds["where"];
            }else{
                $str=$opt;
            }
        }
        $this->connect->query($str);
        return $this->connect->affected_rows;
    }
    public function filed($opt=""){      //字段
        $sql=empty($opt)?"*":$opt;
        $keys="";
        $values="";
        if(strrpos($sql,";")){
            $arr=explode(";",$sql);
            foreach ($arr as $v){
                $newarr=explode("=",$v);
                $keys.=$newarr[0].",";
                $values.=$newarr[1].",";
            }
            $keys=substr($keys,0,-1);
            $values=substr($values,0,-1);
            $sql="(".$keys.") values (".$values .")";
        }else if (strrpos($sql,"=")){
            $arr=explode("=",$sql);
            $keys=$arr[0];
            $values=$arr[1];
            $sql="(".$keys.") values (".$values .")";
        }
        $this->fileds["filed"]=$sql;
        return $this;
    }
}
//$db=new db("category");
//var_dump($db->filed("cname='sf'")->insert());    //增
//var_dump($db->select());             //查
//var_dump($db->where("cid=65")->delete());          // 删
//var_dump($db->where("cid=63")->filed("cname='sa是否合适的花费不菲的书法家',pid=3")->update());   //改