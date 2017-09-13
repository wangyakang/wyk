var async=require("async")
//1.series  串行，依次执行完前面的再执行最后一个并依次返回
// async.series([
//         function(callback) {
//             setTimeout(function () {
//                 console.log("one")
//                 callback(null, 'one');
//             },2000)
//         },
//         function(callback) {
//             setTimeout(function () {
//                 console.log("two")
//                 callback(null, 'two');
//             },1000)
//         }
//     ],
//     function(err, results) {
//         if(err){
//             console.log(err)
//         }else {
//             console.log(results)
//         }
//         // results is now equal to ['one', 'two']
//     });
//parallel：并行  两个都执行完再执行返回全部结果，同时返回，但执行顺序与执行时间有关
// async.parallel([
//         function(callback) {
//             setTimeout(function() {
//                 console.log(1)
//                 callback(null, 'one');
//             }, 2000);
//         },
//         function(callback) {
//             setTimeout(function() {
//                 console.log(2)
//                 callback(null, 'two');
//             }, 1000);
//         }
//     ],
//     function(err, results) {
//         if(err){
//             console.log(err)
//         }else {
//             console.log(results)
//         }
//         // the results array will equal ['one','two'] even though
//         // the second function had a shorter timeout.
//     });

// //auto:自由组合   依次执行单个事件，完成后再执行结合事件
// var async=require("async");
// async.auto({
//     get_data: function(callback) {
//         setTimeout(function () {
//             console.log('第一次');
//             callback(null, '第一次结束');
//         },2000)
//     },
//     make_folder: function(callback) {
//         setTimeout(function () {
//             console.log('第二次');
//             callback(null, '第二次结束');
//             // this is run at the same time as getting the data
//         },1000)
//     },
//     write_file: ['get_data', 'make_folder', function(results, callback) {
//         setTimeout(function () {
//             console.log('结合体', results);
//             callback(null,"结合执行完毕")
//         },1000)
//         // once there is some data and the directory exists,
//         // write the data to a file in the directory
//     }]
// }, function(err, results) {
//     console.log('err = ', err);
//     console.log('results = ', results);
// });
// //each:批量并行获取数据       eachSeries：批量串行获取数据
var arr=[1,2,3,4]
// async.each(arr,function (file,callback) {
//     setTimeout(function () {
//         console.log(file)
//     },1000)
// })
async.eachSeries(arr,function (file,callback) {
    setTimeout(function () {
        console.log(file)
        callback(null,"a")
    },1000)
},function (erro) {
    console.log(erro)
})