var mysql=require("mysql");
module.exports=mysql.createServer({
    host:"localhost",
    port:"3306",
    user:"root",
    password:"",
    database:"workapp"
})
