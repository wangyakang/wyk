// var http=require("http");
// http.createServer(function (req,res) {
//     console.log(Buffer.from([1,2,3]));
//     res.end("hello word");
//     const buf = Buffer.from('hello world', 'ascii');
//     console.log(buf.toString('utf8'));
// }).listen(8888);   //自己开启一个服务器
// module.exports.math=function aa(angle) {
//     console.log(angle*Math.PI/180);
// }
// module.exports.hello=()=>"hello";
var fs=require("fs");
fs.writeFile("abc.html","abd",function (error) {
    if(error){
        console.log("失败")
    }else {
        console.log("测试")
    }
});