var express=require("express");
var app=express();
app.listen(2222);
app.get("/",function (req,res) {
    var fn=req.query.callback;
    var data=[
        {name:"张三", age:10},
        {name:"李四", age:10},
        {name:"张龙", age:10}
    ]
    data=JSON.stringify(data)
    // res.send(`window.onload=function(){${fn}('${data}')}`)
    res.send(`${fn}('${data}')`)

})