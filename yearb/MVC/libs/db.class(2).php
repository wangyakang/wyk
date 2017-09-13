<?php
//封装增删改查语句
//面向对象的方式写增删改查语句
//输入规范
//insert
//	1. 	$db->filed("name='zhangsan';age=13")->insert();
//		filed传多个参数用";"隔开
//	2.	$db->insert("name='zhangsan';age=13");
//		可传完整语句，也可字段+值
//delete
//	1. 	$db->where("id=5")->delete();
//	2.	$db->delete("id=5");
//		可直接将删除的条件用delete传入
//update
//	1. 	$db->filed("name=zhangsan,age=12")->where("id=3")->update();
//		filed里面传多个参数用","隔开
//	2. 	$db->where("id=3")->update("name=zhangsan,age=12")
//select
//	1. 	$db->filed("name")->where("id=3")->order("id ASC")->limit("0,2")->select();
//	2.	$db->where("id=3")->order("id ASC")->limit("0,2")->select("name");
//		要查询的字段可直接写在select中

class db{
	public $hostname="localhost";
	public $dbname="1603";
	public $tablename="user";
	private $username="root";
	private $password="";
	public $connect;
	public $opts;
	
	/* 晚绑定	弱类型	 严谨*/
	function __construct($tablename=""){
        $this->tablename=empty($tablename)?"demo":$tablename;
        $this->config();
    }
    
    public function config(){
        $this->connect=new mysqli($this->hostname,$this->username,$this->password,$this->dbname);//连接数据库
        if(mysqli_connect_errno($this->connect)){
            echo "连接数据库失败";
//          $this->connect->close();
            exit;
        }
        $this->connect->query("set names utf8");//查询语言
        $this->opts["filed"]=$this->opts["filed"]?$this->opts["filed"]:"*";
        $this->opts["where"]=$this->opts["order"]=$this->opts["limit"]=" ";
        $this->opts["keys"]=$this->opts["values"]="";
    }
//  查
	public function select($sql=""){
		if(empty($sql)){
        	$sql=empty($sql)?"select ".$this->opts["filed"]." from ".$this->tablename." ".$this->opts["where"]." ".$this->opts["order"]." ".$this->opts["limit"]:$sql;
	    }else{
	    	if(strpos($sql,"elect")){
				$sql=$sql;
			}else{
				$this->filed($sql);
				$sql="select ".$this->opts["filed"]." from ".$this->tablename." ".$this->opts["where"]." ".$this->opts["order"]." ".$this->opts["limit"];
			};
	    };
        $result=$this->connect->query($sql);
        $arr=array();
        while($row=$result->fetch_assoc()){
            $arr[]=$row;
        };
        return $arr;
    }
    // 增
    public function insert($sql=""){
		if(empty($sql)){
			$sql=empty($sql)?"insert into ".$this->tablename." ".$this->opts["filed"]:$sql;
		}else{
			if(strpos($sql,"neset")){
				$sql=$sql;
			}else{
				$this->filed($sql);
				$this->opts["filed"]="(".$this->opts["keys"].") values (".$this->opts["values"].")";
				$sql="insert into ".$this->tablename." ".$this->opts["filed"];
			};
		};
		$this->connect->query($sql);
        return $this->connect->affected_rows;
    }
    // 删
    public function delete($sql=""){
    	if(empty($sql)){
        	$sql=empty($sql)?"delete from ".$this->tablename." ".$this->opts["where"]:$sql;
        }else{
        	if(strpos($sql,"elete")){
				$sql=$sql;
			}else{
				$this->where($sql);
				$sql="delete from ".$this->tablename." ".$this->opts["where"];
			}
        }
        $this->connect->query($sql);
        return $this->connect->affected_rows;
    }
    // 改
    public function update($sql=""){
    	if(empty($sql)){
        	$sql=empty($sql)?"update ".$this->tablename." set ".$this->opts["filed"]." ".$this->opts["where"]:$sql;
        }else{
        	if(strpos($sql,"pdate")){
				$sql=$sql;
			}else{
				$this->filed($sql);
				$sql="update ".$this->tablename." set ".$this->opts["filed"]." ".$this->opts["where"];
			}
        }
        $this->connect->query($sql);
        return $this->connect->affected_rows;
    }
    // 字段
	public function filed($sql=""){
        $sql=empty($sql)?"*":$sql;
        $keys="";
        $values="";
        if(strpos($sql,";")){
            $arr=explode(";",$sql);
            foreach ($arr as $k=>$v){
                $newarr=explode("=",$v);
                $keys.=$newarr[0].",";
                $values.=$newarr[1].",";
            };
            $sql=str_replace(";",",",$sql);
			$this->opts["keys"]=substr($keys,0,-1);
        }else if(strpos($sql,"=")){
            $arr2=explode("=",$sql);
			$this->opts["keys"]=$arr2[0];
			$this->opts["values"]=$arr2[1];
        };
        $this->opts["filed"]=$sql;
        return $this;
    }
    // 条件
    public function where($sql=""){
        $sql=empty($sql)?"":"where ".$sql;
        $this->opts["where"]=$sql;
        return $this;
    }
    // 排序
    public function order($sql=""){
        $sql=empty($sql)?"":"ORDER BY ".$sql;
        $this->opts["order"]=$sql;
        return $this;
    }
    // 截取数组
    public function limit($sql=""){
        $sql=empty($sql)?"":"limit ".$sql;
        $this->opts["limit"]=$sql;
        return $this;
    }
}




//实例化
//	$db=new db("user");
//	var_dump($db->delete("username='2233'"));

?>