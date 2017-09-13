//连接数据库
var mysql=require("mysql");
var connection=mysql.createConnection({
    host:"localhost",
    user:"root",
    password:"",
    database:"student"
})
module.exports=connection;  //将功能发射出去以便其他文件调用