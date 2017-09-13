<?php
	class abc{
		function abc(){
			$this->str="";    //str放的是一级分类下的
		}
		//添加分类
			function tree($pid,$flag,$table,$db,$currentid=null){
				if($currentid){
					$sql="select * from $table where cid=".$currentid;
					$result=$db->query($sql);
					$row=$result->fetch_assoc();
					$fid=$row["pid"];
				}
				$flag=$flag+1;
				$sql="select * from $table where pid=".$pid;   //查询
				$result=$db->query($sql);					   //执行$->query()
				while($row=$result->fetch_assoc()){            //循环
					$cid=$row["cid"];   //当前操作的id
					$str=str_repeat("-",$flag);
					if($currentid&&$pid==$row["cid"]){
						$this->str.="<option value='$fid' selected='selected'>{$str}{$row['cname']}</option>";  //通过当前行的id确定当前行的内容
					}else{
						$this->str.="<option value='$cid'>{$str}{$row['cname']}</option>";
						$this->tree($row["cid"],$flag,$table,$db,$currentid);
					}
				}
			}
		//管理分类
			function table($pid,$flag,$table,$db){
				$flag=$flag+1;
				$sql="select * from $table where pid=".$pid;   //查询
				$result=$db->query($sql);					   //执行$->query()
				while($row=$result->fetch_assoc()){            //循环
					$cid=$row["cid"];   //当前操作的id
					$str=str_repeat("-",$flag);
						$this->str.="<tr>
							<td>{$cid}</td>
							<td>{$str}{$row["cname"]}</td>
							<td>{$row["pid"]}</td>
							<td><a href='delCategory.php?id=$cid'>删除</a> <a href='updateCategory.php?id=$cid'>编辑</a></td>";  
						$this->table($row["cid"],$flag,$table,$db);
					}
				}
		//删除
			function delete($cid,$table,$db){
				$sql="select * from $table where pid=".$cid;
				$result=$db->query($sql);
				$row=$result->fetch_assoc();
				if(!$row){
					$sql="delete from $table where cid=".$cid;
					$db->query($sql);
					if($db->affected_rows>0){
						$message="删除成功！";
						$url="showCategory.php";
						include "message.php";
						exit;
					}
				}else{
					$message="有子类，请先删除子类！";
					$url="showCategory.php";
					include "message.php";
					exit;
				}
			}
		//管理内容
			function tables($pid,$flag,$table,$db,$currentid=null){
				$flag=$flag+1;
				$sql="select * from $table where pid=".$pid;
				$row=$result=$db->query($sql);
				while($row=$result->fetch_assoc()){
					$cid=$row["cid"];
					$str=str_repeat("-",$flag);
						if($currentid==$row["cid"]){
							$this->str.="<option value='$cid' selected='selected'>{$str}{$row["cname"]}</option>";
						}else{
							$this->str.="<option value='$cid'>{$str}{$row["cname"]}</option>";
							$this->tables($row["cid"],$flag,$table,$db,$currentid);
						}		
					}
				}
		/* 1.需要先查出pid与cid相等的数据
		 * 2.执行sql语句
		 * 3.取出每行的结果并保存
		 * 4.做判断
		 * 	 1)如果(pid≠cid)父级id不等于当前操作的id
		 *   	则无子类，就可以删除(①执行sql删除语句  ②如果影响行数大于0，则删除)
		 * 	 2)否则
		 * 		有子类，则不可删除
		*/
		}
?>