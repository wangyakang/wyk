var http=require("http");
var path=require("path");
var fs=require("fs");
var object={};
class server{
    //构造函数
    constructor(){
        //客户端访问方式
        this.getArr={};
        this.postArr={};
        //设置静态路径
        this.staticInfo=".jpg|.png|.css|.js";
        this.staticUrl="static";
        this.type;
    }
    //设置头信息
    setHead(res){
        res.setHead("content-type","text/")
    }
    //启动函数（指定端口）
    listen(porl){
        this.creat(porl);
    }
    //配置路径  （动态路径，安全性）
    setStatic(dir){
        this.staticUrl=dir;
    }
    get(url,callback){
        this.getArr[url]=callback;
    }
    post(url,callback){
        this.getArr[url]=callback;
    }
    //创建服务器
    creat(porl){
        var that=this;
        http.createServer(function (req,res) {
            that.result(req,res);
        }).listen(porl)
    }
    //执行访问过程
    result(req,res){
        var url=path.parse(req.url);  //请求的路径拆分为数组
        if(url.base=="favicon.ico"){
            res.end();
        }else {
            var ext=path.ext;
            if(this.staticInfo.indexOf(ext)>-1&&ext!==""){  //访问静态文件
                var fullStaticUrl=path.join(this.staticUrl,url.dir,url.base);
                fs.createReadStream(fullStaticUrl).pipe(fs.createWriteStream(""));  //创建可读流
                //**解读的文件转化为数据流通过管道添加到其他可写流中  res是个双工流
                try{  //捕捉错误并可返回

                }catch (e){

                };
            }else { //访问动态文件
                var fullpath=path.resolve(url.dir,url.base);
                if(req.method=="get")

                    if(this.getArr[fullpath]){

                    }
                }else if(req.method=="post"){

                }
            }
            var fullpath=path.resolve(url.dir,url.base);
            //扩展
            res.send=function (path) {
                fs.readFile(path);
                res.end(con);
            };
            res.sendFile(url,function (error,data) {
                if(error){
                    res.writeHead(404,{"content-type":"text/html;charset=utf-8"});
                    res.end("文件找不到");
                }else {
                    res.writeHead(304,{"content-type":type+";charset=utf-8"});
                }
                object[fullpath](req,res);
            });
            // res.sendFile=function (url) {
            //     // fs.createReadStream(url).pipe(p)  //流
            //
            // }
        }
        req.end()
    }
}
module.exports=new server();  //发送