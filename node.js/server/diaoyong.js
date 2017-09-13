var obj=require("./server");
obj.listen(2222);
obj.get("a/:id",function (req,res) {   //动态路径
    res.sendFile("../abc.html")
});