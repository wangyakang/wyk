// require("http");
// http.createServer(function (req,res) {
//     var body="";
//     req.on("data",function (data) {  //流的应用，请求数据
//         body+=data;
//     })
//     req.on("end",function () {
//         res.end(body);
//     })
//     res.end("22")
// }).listen(3333);
//处理流的库  through
//流   1.push()可读流 2.消费流  3.数据写入可写流write() 4.输出到目的地write._write，
//可读流：1.在内存中开辟一块空间用来存储数据2.在什么时候进行消费流;手动消费流；data事件进行消费流；通过指定目的地消费流
var stream=require("stream");
var fs=require("fs");
var read=new stream.Readable({highWaterMark:100,objectMode:true}); //创建可读流,参数可指定可读缓存上限阀值,最小16kb  objectMode:true 模式转变
read._read=function () {  //当准备消费的时候执行
    // read.shift()//
    read.push("q")  //用来读取数据,字符串或buffer，读到内存中
    read.push("a")
    read.push(null) //关掉可读流
}

// read.read(2)  //消耗流，手动消费
//data事件消费
// read.on("readable",function () {
//     stream.read()
//     console.log("准备内存数据，可以消费")
// })
// read.on("data",function (data) {  //将指定空间内的数据消费，
//     // 在可写流中进行消费
//     console.log(data)
// })
// read.on("end",function () {  //监听消费完毕
//     console.log("消费完 ")
// })
//内部封装消费可读流
// read.pipe(process.stdout)   read.pipe(write)
//   可写流
var write=new stream.Writable; //创建可写流
read.pipe(write)
// read.on("data",function (data) {  //将指定空间内的数据消费，
//     // 可读流的数据放入可写流中进行消费
//     write.write(data)
// })
write._write=function (a,b,next) {  //指定可写流中的数据放置出口 a:输出的数据 b:数据的格式 c:进行下一次传输
    fs.appendFile("1.text",a.toString())
    // write.write()
    next()  //确定上一个可写流清空掉，以便下一个可写流消费

}
//双工流  ：同时在维护两个内存 可读、可写的内存
var transform1=new stream.Transform;  //特殊的双工流
var transform2=new stream.Transform;
var transform3=new stream.Transform;
transform1._read=function () {  //可读
    this.push("a");
    this.push("b");
    this.push(null);
}
transform2._transform=function (a,b,c) {  //可写
    this.push(a.toString().toUpperCase());  //大写,放入可读流中以便下一次使用
    c();
}
transform3._transform=function (a,b,c) {
    console.log(a.toString())
    c();
}
transform1.pipe(transform2).pipe(transform3)
// 双工流   转换流
//所有数据都是二进制，保存在v8所能调用的内存中   fs.readfile读取的数据一次性读取并保存在内存中
//buffer缓存区，定长，存取速度快，不在v8引擎内存中，需要分批去处理：图片、文件信息