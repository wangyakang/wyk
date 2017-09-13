//buffer;存储大数据，所占空间不占用v8引擎
//读取速度快，定长   二进制方式存储，十六进制方式显示
var obj=new Buffer()  //全局变量
//创建方式
    //指定长度
    var obj=Buffer.alloc(6)  //指定长度
    obj.write("asasd");
    //数组形式
    var ovj=Buffer(["aa","as"]);
    //直接写入
    var obj=Buffer.from("asd");
    obj.toString() //可识别形式
    Buffer.concat([obj,ovj])  //合并
