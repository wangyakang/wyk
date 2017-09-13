var express=require("express");
var path=require("path");
var ejs=require("ejs");
var mysql=require("mysql");//引入数据库
var bodyParser = require('body-parser');
var app=express();
app.listen(3333);
//引入express ->设置路径 get\post-》引入ejs （解析动态模板）-》设置模板的路径以及模板的类型-》设置静态文件的路径
var connection = mysql.createConnection({
    host     : 'localhost',
    user     : 'root',
    password : '',
    database:"student"
});
// var connection = mysql.createConnection({
//     host     : 'sqld.duapp.com',
//     user     : '1250de1ae4c64a30ab3b2c43b3a97480',
//     password : 'a021088022984534a76974f520675d10',
//     database:"qeauwJoqBNqxevxyXQQS"
// });
app.set("views",path.join(__dirname,"./template"));
app.set("view engine","ejs"); //指定模板引擎
app.get("/",function(req,res){
    connection.query("select * from xinxi",function (error,rows) {
        if (error) throw error;
        res.render("index",{result:rows});
    })
    // res.sendFile(path.join(__dirname,"/table.ejs"));//输出绝对路径
});
app.use(express.static(path.join(__dirname,"static"))); //静态文件路径的设置
//ejs文件路径
// app.get("/list(/:id)?",function(req,res){
//     var id=req.params.id;
//     var name=req.query.name;
//     res.render("list",{id:name});
// })
// //post
// app.use(bodyParser.urlencoded({ extended: true }));
// app.post('/list(/:id)?', function (req, res) {
//     var id=req.params.id;
//     var name=req.params.name;
//     res.render("list",{id:name});
// })
//连接数据库
// app.get("/list(/:id)?",function(req,res){
//     connection.query("select * from xinxi",function (error,rows) {
//         if (error) throw error;
//         res.render("list",{result:rows});
//     })
// })
//添加
app.get("/add",function (req,res) {
    res.render("add");
})
app.use(bodyParser.urlencoded({ extended: true }));
app.post("/add",function(req,res){
    var name=req.body.name;
    var age=req.body.age;
    var sex=req.body.sex;
    connection.query(`insert into xinxi (name,sex,age) values ('${name}','${sex}',${age})`,function (err, rows, fields) {
        if (err) throw err;
        res.redirect("/")
    })
})
//删除
app.get("/del(/:id)?",function (req,res) {
    var id=req.query.id;
    // console.log(id)
    connection.query(`delete from xinxi where id=${id}`,function (err) {
        if (err) throw err;
        res.redirect("/")
    })
})
//编辑
app.get("/edit(/:id)?",function (req,res) {
    var id=req.query.id;
    connection.query(`select * from xinxi where id=${id}`,function (error,rows) {
        if (error) throw errior;
        res.render("editin",{result:rows});
    })
})
app.post("/editin(/:id)?",function (req,res) {
    var id=req.body.id;
    var name=req.body.name;
    var age=req.body.age;
    var sex=req.body.sex;
    var  aa=`update xinxi set name=${name},age=${age},sex=${sex} where id=${id}`
    console.log(aa);
    connection.query(`update xinxi set name="${name}",age="${age}",sex="${sex}" where id=${id}`,function (err) {
        if (err) throw err;
        res.redirect("/")
    })
})