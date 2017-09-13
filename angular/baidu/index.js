var express=require("express");
var ejs=require("ejs");
var mysql=require("mysql");
var path=require("path");
var app=express();
app.listen(1111);
app.set("views",path.join(__dirname,"./template"));
app.set("view engine","ejs"); //指定模板引擎
var connection = mysql.createConnection({//连接数据库
    host     : 'localhost',
    user     : 'root',
    password : '',
    database:"student"
});
app.get("/",function (req,res) {//显示页面
    res.render("index")
    // res.sendFile(path.join(__dirname,"template/index.html"));
})
app.get("/index",function(req,res){  //查询数据库
    connection.query("select * from xinxi",function (error,rows) {
        if (error) throw error;
        res.send(JSON.stringify(rows));
    })
});
//删除数据库
app.get("/del",function(req,res){
    var id=req.query.id;
    connection.query("delete from xinxi where id="+id,function (error,rows) {
        if (error) throw error;
        if(rows.affectedRows>0){
            res.send("ok");
        }
    })
});
//修改数据
app.get("/update",function (req,res) {
    var id=req.query.id;
    var val=req.query.val;
    var ziduan=req.query.ziduan;
    // var aa="update xinxi set "+ziduan+"="+val+" where id="+id;
    // console.log(aa)
    connection.query("update xinxi set "+ziduan+" = '??' where id="+id,[val],function (error,rows) {
            res.send("ok");
    })
})
//添加
app.get("/add",function(req,res){
    var name=req.query.name;
    var sex=req.query.sex;
    var age=req.query.age;
    // var aa=`insert into xinxi (name,sex,age) values ('${name}','${sex}','${age}')`
    // console.log(aa)
    connection.query("insert into xinxi (name,sex,age) values ( '??','??',"+age+")",[name,sex],function(error,result){
        res.send("ok");
    })
})
app.use(express.static(path.join(__dirname,"static")));