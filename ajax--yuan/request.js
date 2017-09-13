var http=require("https");
var url=require("url");   //处理地址
var path=require("path");  //处理路径
//服务器：具有接收客户端请求的能力
//客户端
    //1.请求的主机   2.请求的端口  3.请求的协议   4.请求的路径  5.请求的头信息
//user-ang  代理   header

//爬虫
var opt={
    hostname:"www.jianshu.com",  //域名
    protocal:"https:",   //协议
    path:"/p/0efc272b9e05"  //路径
}
var obj=http.request(opt,function (res) {
    var data="";
    res.on("data",function (e) {
        data+=e;
    })
    res.on("end",function () {
        console.log(data)   //获得的数据
    })
})
obj.end()

重定向：页面跳转
闭包：函数创立的作用域，作用域每作用一次涉及到垃圾回收机制
this：基于函数运行绑定this，调用或取值
库：jquery，zpoto，swiper框架
性能优化：代码优化  减少DOM操作  减少全局变量  公共样式 、公共方式浏览器加载减少http请求
ajax：是前端与后台最紧密的联系，与后台交互，调接口
websocket：长链接
json对象：通用的数据传输格式，eval()  jsonpars