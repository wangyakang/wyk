var request=require("request");
var cheerio=require("cheerio");
var fs=require("fs")
request("http://www.jianshu.com/p/bf6f823ee120",function (erro,head,body) {
    console.log(body)  //获取的全部内容
    var $=cheerio.load(body);   //将内容打包成对象
    $("img").each(function (index,obj) {
        var src=obj.attribs.src.slice(1,-1);
        // console.log(src)
        if(src.indexOf("https:")<0){
            src="https:"+src;
        }
        var name=src.substr(src.lastIndexOf("/")+1)
        request.get(src,function (error) {

        }).pipe(fs.createWriteStream("./img/"+name))
    })
})
