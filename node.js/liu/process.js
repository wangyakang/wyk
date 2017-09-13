#!/usr/bin/env node

// progress.exit()  //结束进程，对于服务的开启不会自动关闭
// progress.stdin()  //输入，监控键盘输入的信息->放入内存-》输出（消费流）
// progress.stdout()  //将信息输出到控制台，console.log()原理
// progress.stdin.on("data",function (data) {
//     //输入的东西data
// })
// progress.stdin.pipe(progress.stdout) //读取流-》管道pipe->输出流
// progress.argv
if(process.argv[2]=="aa"){
    console.log("aa");
}else if(process.argv[2]=="bb"){
    console.log("bb");
}else if(process.argv[2]==undefined){
    console.log("default");
}
/*package.json中的bin：命令：执行该命令的文件
 * 如：cms aa   cms bb   cms
 * */