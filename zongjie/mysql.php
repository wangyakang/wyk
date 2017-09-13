<?php
//	1.mysql:
//   		默认端口3306
//   		存储数据的软件   快速\敏捷(吉祥物海豚) 应用在中小型的项目中，关系型数据库
//      	phpmyadmin :图形化操作数据库
////  mysql 通过sql命令去操作数据库，图形化操作更方便
//    	数据库：存储大小与电脑硬盘有关，可以从硬盘中快速读取数据,真正存储的数据在数据表中
// 		编码：在浏览器中显示的一种规则  GB2312 GBK(针对中国的少数名族的编码)  UTF-8(万国码，所有语言进行编码)
//    数据库中id字段，用来表示唯一代表表格的信息，
//              建立数据库：
//   			数据库栏新建数据库    数据库名、排序规则：utf8_general_ci
//    		新建数据表    名字、字段数：建立字段
//    		建立数据表
//        		字段：
//        		类型：INT 整型，CHAR文本类型      //用相应的数据类型进行存储数据，节省内存空间
//        			Int:4个字节   tinyint:255
//        		长度：输入的长度
//        		    int 内存中补充0不同
//        			char  GBK所占字节少,与显示的内容有关
//        			varchar     2^23，最多存储65535个字
//        		索引：提高搜索效率
//            		PRIMARY：主键，将字段设置为主键，意味着字段是唯一标识该数据的
//        			A_I：自动增加，设置值时字段值自动加一
//    			插入  ：上传数据，输入值后执行
//    		操作栏内增删数据表及数据库
//    		drop database :删除数据库
//    		delete:删除表
//	2.数据库命令：
//   		1).配置环境：将数据库的运行环境配置在环境中
//   		2).cmd命令操作数据库
//   	 	  	e:      回车
//   	 		mysql -hlocalhost -uroot -p  回车
//   	 		Enter password:
//   	 		show databases;  回车    //查看库
//   	 		create database name(库);  //新建库
//   	 		use mysql/数据库名称;  回车    //操作库
//   	 		use 数据库name; 回车   //选择操作数据库
//   	 		show tables; 回车        //查询表
//   	 		create table stu( 回车    //创建表结构
//   	 			id int(11) auto_increment primary key),回车
//   	 			name varchar(255),回车
//   	 			age varchar(255),回车
//   	 			sex varchar(255));回车
//   	 		desc 表name;    //查看表的结构
//   	 		describe  表的name; 回车
//
//   	 	3)**增删查改  (对表进行操作)
//   	 	select *(全部)/字段 from  name[表]; 回车   //查看表的信息
//   	 	insert into 表名 (字段1,字段2,字段3) values(值1,"12","man") //增
//   	 	update 表名 set 字段1=值1,字段1=值2  where id=2;  //改
//   	 	delete from stu where 删除的条件(通过表的id或字段);  //删
///         order  by  排序字段   asc正序/desc倒序   limit  0,2 从第m条开始，取n条        //排序，截取
//   	 	exit;  退出操作

//            select * from shows inner/left  join  user  on shows.id=user.id
//              关联查询，查询两个表
//   	3.数据库基本操作
//   		1）连接数据库的方式：mysqli
//// 			MySQLi 和 PDO :
////			PDO 应用在 12 种不同数据库中， MySQLi 只针对 MySQL 数据库。所以，如果你的项目需要在多种数据库中切换，建议使用 PDO ，这样你只需要修改连接字符串和部分查询语句即可。 使用 MySQLi, 如果不同数据库，你需要重新编写所有代码，包括查询。
////			两者都是面向对象, 但 MySQLi 还提供了 API 接口。
////			两者都支持预处理语句。 预处理语句可以防止 SQL 注入，对于 web 项目的安全性是非常重要的。
//   		$db=new mysqli("localhost","root","","student");
//   		2)执行数据库语言
//   			// ->:调用
//   			// mysql_query()函数执行数据库语言
//			$db->query("set names utf8");
//		3)查询数据库中表的信息 //所有结果  $result：结果集
//   		  	//增删改的结果是影响的行数
//			$result=$db->query("select * from xinxi");
//		4)$result->fetch_assoc()    //一行一行的获取表内信息,该方法保留着每次循环的信息
//			while($row=$result->fetch_assoc()){}   //循环获取数据库中表的信息，并对值进行操作
//		5)var_dump 输出一组数据
//		  <pre>    输出数组结构
//        close()  //释放内存，关掉系统
//        phpInfo()  php的内部结构
//        isset()函数 一般用来检测变量是否设置
//        empty()函数 判断值为否为空
//                若变量不存在则返回 TRUE
//                若变量存在且其值为""、0、"0"、NULL、、FALSE、array()、var $var; 以及没有任何属性的对象，则返回 TURE
//配置信息：php.ini
//post_max_size:上传最大字节
//upload_max_size:上传最大字节
//		6)<?php include 'menu.php';?><!--   -->
<!--			<!--可以将 PHP 文件的内容插入另一个 PHP 文件（在服务器执行它之前）-->
<!--		7)  mysql_affected_rows 取得前一次MySQL操作所影响的记录行数，影响是增删改，如果函数失败，返回-1；-->
<!-- 			mysql_num_rows()返回结果集中行的数目，仅对 select 语句有效。参数是mysql_query返回的结果集ID。-->
<!--		8）if($db->affected_rows>0){  }  当影响行数>0表示执行的语句成功-->
<!--			//	$arr=array();-->
<!--			//	$arr[]=1;   //php中数组小标自动累加 -->
<!--			//	-->
<!--			//	json_encode()    //输出类似js中json格式的代码-->
<!--		$id=mysqli_insert_id($db);   //当前插入的id-->
<!--        foreach($arr（循环的值） as  $v（值）/$v=>$v（键值）  )    //循环-->
<!--//php语言与js语言的区别-->
<!-- 	1）js中单引双引代表字符串；php中双引号中可以解析变量，单引号只代表字符串，双引号功能比单引号多，单引号运行效率比双引号运行效率高-->
<!-- 	2）-->
<!---->
<!--session:解决http无状态协议-->
<!--?>-->