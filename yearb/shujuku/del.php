<?php
	include "db.php";
	$id=$_GET["id"];
	$db->query("delete from xinxi where id=".$id);
	if($db->affected_rows>0){
     	include "tishi.html";
 	}
 	//   location.href=url  当前页面打开URL页面 
 	//	 mysql_affected_rows 取得前一次MySQL操作所影响的记录行数，影响是增删改，如果函数失败，返回-1；
 	//	 mysql_num_rows()返回结果集中行的数目，仅对 select 语句有效。参数是mysql_query返回的结果集ID。
//	前后台交互：
//		html提供一个可视化的信息，将数据存储在数据库中
//		前端语言：javascript
//		后台语言：php(基于web的后台语言) 接受用户请求，根据请求到数据库中取出，通过处理返回相应的数据
//		数据库：关系型数据库 ，使用sql语句
?>