//配置各种文件
var express=require("express");
var path=require("path");
var app=express();
var mysql=require("./mysql");//引用文件需要写明路径
app.listen("9999");
//设置默认首页，分配路由
app.get("/",function (req,res) {
    res.sendFile(path.join(__dirname,"static/html/index.html"))
})
//文件配置接口
app.get("/html/:name",function (req,res) {
    res.sendFile(path.join(__dirname,"static/html/"+req.params.name))
})
app.get("/edit/:id",function (req,res) {
    res.sendFile(path.join(__dirname,"static/html/"+req.params.name))
})
//查询数据库
app.get("/select",function (req,res) {
    mysql.query("select * from xinxi",function (errow,result) {
        res.send(JSON.stringify(result))  //将查询的结果返回，res.send()只接受字符串和buffer类型，因此将结果转化为字符串
    })
})
//删除数据库
app.get("/del",function (req,res) {
    var id=req.query.id;  //获取ajax传递的数据
    // console.log(id)
    mysql.query(`delete from xinxi where id=${id}`,function () {
        res.send("ok")
    })
})
//编辑
app.get("/edit",function (req,res) {
    var id=req.query.id;  //获取ajax传递的数据
    var name=req.query.name;
    var sex=req.query.sex;
    var age=req.query.age;
    // console.log(id,name,sex,age)
    mysql.query(`update xinxi set name='${name}',sex='${sex}',age='${age}' where id=${id}`,function () {
        res.send("编辑成功")
    })
})
//添加
app.get("/add",function (req,res) {
    var name=req.query.name||"";
    var sex=req.query.sex||"";
    var age=req.query.age||"";
    mysql.query(`insert into xinxi (name,sex,age) values ('${name}','${sex}','${age}')`,function (errow,result) {
        res.send(result.insertId.toString())  //将添加的自增id返回，res.send()只接受字符串和buffer类型，因此将结果转化为字符串
    })
})
//设置静态路径
app.use(express.static(path.join(__dirname,"static")))