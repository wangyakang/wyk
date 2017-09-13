//头信息  对信息的描述：标准
//     *******http://tool.oschina.net/commons********
//tcp/ip协议7层：物理层-》数据链路层-》网络层-》传输层-》会话层-》表示层-》应用层（http协议，监听收到的信息并发送）
//http协议
    // 应用层 链路层 物理层       基于客户端  服务器
    //服务器：具有服务器该有的一系列功能，http的解析，对于操作系统的控制1.软件  apache、iis\sun(java)    2.独立的(专门用来充当服务器的)   3.嵌入式
/*  服务器角度
//http信息分为三种
    a.通用头   b.响应头   c.请求头
    长链接是http:1.1版本特有的功能，持久链接，无需再重新请求，但对于服务器消耗大
触发条件：客户端向服务器发起请求
*   1.建立连接（接收客户端的请求）
*       记录客户端的地址及状态
// *   2.发起请求
*   3.接受请求
*       头信息url\协议\版本号http:1.1
*   4.请求文件的映射和处理
*       a.对系统进行操作：对静态文件进行处理|处理动态文件
*   5.构建响应
*       a.构件相应头  b.构件相应体
*   6.发送响应
*   7.生成日志
*       服务器生成日志
* */
/*基于事件的非阻塞型的语言
* 基于事件的单线程异步机制*/


//发起http请求：1.点击链接 2.link  3.img  src  4.ajax  5.html本身下载
//建立服务器

// var http=require("http");
// var path=require("path");
// var server=http.createServer(function (req,res){  //req:请求的实例化   res：发送的实例化
//     var url=path.parse(req.url);   //请求的路径
//     if(url.base=="favicon.ico"){   //服务器发起的请求，图标     req.url=="/favicon.ico"
//         res.end();
//     }else{
//         res.setHeader("content-type","text/html;charset=utf-8");  //设置信息头
//         var fs=require("fs");
//         var config=require("./config");
//         // res.write("aa");
//         var root=config.root.dir;  //设置根目录，默认本地盘
//         var fullPath=root+path.resolve(url.dir,url.base);
//         console.log(fullPath)
//         // fs.readFile(fullPath,"bina",function (error,file) {
//         //     if(error){
//         //         res.writeHead(404,{"content-type":"text/html;charset=utf-8"})
//         //         res.end("此文件找不到")
//         //     }else {
//         //         //硬编码，直接书写格式
//         //         //通过配置文件指定支持格式
//         //         res.writeHead(200,{"content-type":config[url.ext]+";charset=utf-8"})  //指定文件格式
//         //         res.write(file);
//         //         res.end();
//         //     }
//         // })
//         res.end();    //关闭请求
//     }
//     // res.writeHead(200,{"content-type":"text/html;charset=utf-8"});
//     // res.write("");    //直接在客户端中书写东西，必须是字符串或buffer格式
//     //path.sep  跨平台的连接  window下\ linus下/
// })
// server.listen("2222");  //设置端口号


var http=require("http");   //调用nodejs中的核心包
var path=require("path");
var fs=require("fs");
var config=require("./config");
var zlib=require("zlib");

// /*
//  *    客户端                  服务器
//  *    1.html                 1.html->修改
//  *    如何知道我服务器的内容修改了
//  *
//  *
//  *    1.css 修改的时间
//  *
//  *
//  *     http
//  *      last-modified:10：10
//  *
//  *
//  *
//  *      动态的服务器
//  *
//  *      读取地址栏里面的查询
//  *
//  *
//  *      php
//  *
//  *      nodejs   mvc 单入口文件
//  *
//  *
//  *
//  *
//  * */
var obj=http.createServer(function(req,res){//req:请求的实例化   res：发送的实例化
    var url=path.parse(req.url);  //路径，可返回扩展名、路径、文件名、连接符、文件全名
    if(url.base=="favicon.ico"){   //返回path的最后一部分   favicon.ico：浏览器title图标
        res.end();
    }else{
        var root=config.root.dir;
        fs.readdir(root,function(error){
            if(error){
                res.writeHead(404,{"content-type":"text/html;charset=utf-8"});
                res.end("根目录不存在");
                process.exit();
            }
        })
        var fullpath=path.resolve(root+url.dir,url.base);
        var ext=url.ext;
        if(!ext){
            fullpath=path.resolve(fullpath,config.index.index);
        }

        fs.readFile(fullpath,function (error,file) {
            if(error){
                res.writeHead(404,{"content-type":"text/html;charset=utf-8"});
                res.end(fullpath+"这个文件不存在");
            }else{
                var info=fs.statSync(fullpath);//返回一个 fs.Stats 实例
                var mtime=info.mtime.toUTCString();  //返回修改的时间
                console.log(req.headers["if-modified-since"]+"\n"+mtime);
                if((req.headers["if-modified-since"])&&req.headers["if-modified-since"]==mtime){
                    res.writeHead(304,{
                        "content-type":type+";charset=utf-8"});
                    res.end();
                }else {

                    var type = config.type[url.ext];
                    res.setHeader("cache-control", "max-age=" + 1000 * 60);

                    res.setHeader("last-modified", info.mtime.toUTCString());

                    res.writeHead(200, {
                        "content-type": type + ";charset=utf-8"
                    });


                    //console.log(req.headers);
                    res.write(file); //直接在客户端中书写东西，必须是字符串或buffer格式
                    res.end();
                }
            }
        })



    }

}).listen(8888);
