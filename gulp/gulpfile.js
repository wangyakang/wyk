//grunt  gulp类似  前端自动化工具 /前端流构建工具
//npm --save-dev npm    //安装gulp及其插件，自动扩展选项
//导入工具包 require('node_modules里对应模块')
var gulp = require('gulp'); //本地安装gulp所用到的地方
var uglify=require("gulp-uglify"); //使用gulp的插件。压缩js
var uglifycss=require("gulp-uglifycss"); //压缩css插件
var less=require("gulp-less");
var connect=require("gulp-connect");  //开启服务,浏览器自动刷新页面
var concat=require("gulp-concat");  //合并文件
//gaze 监测，watch
//定义一个testLess任务（自定义任务名称）
gulp.task('uglify', function () {
    gulp.src('src/js/*.js') //该任务针对的文件,将源目录下的js全部压缩
        .pipe(uglify()) //该任务调用的模块,压缩
        .pipe(gulp.dest('dest/js')) //能被 pipe 进来，并且将会写文件。并且重新输出（emits）所有数据，因此你可以将它 pipe 到多个文件夹。如果某文件夹不存在，将会自动创建它。
        .pipe(connect.reload())
});
gulp.task('connect', function () {
    connect.server({
        root:"./",
        port:8888,
        livereload: true,
    });
});
gulp.task('concat', function () {
    gulp.src(["src/js/index1.js","src/js/index2.js"])
        .pipe(concat("min.js"))
        .pipe(uglify())
        .pipe(gulp.dest("dest/js"))
});
gulp.task('less', function () {
    gulp.src('src/less/*.less')
        .pipe(less())
        .pipe(uglifycss())
        .pipe(gulp.dest('dest/css'))
        .pipe(connect.reload())
});
gulp.task('html', function () {
    gulp.src('./*.html')
        .pipe(connect.reload())
});
gulp.task("watch",function () {
    gulp.watch("src/js/*.js",["uglify"]);
    gulp.watch("src/less/*.less",["less"]);
    gulp.watch("./*.html",["html"]);
})

gulp.task("default",["watch","connect"]);
//
// gulp.task('default',['testLess', 'elseTask']); //定义默认任务 elseTask为其他任务，该示例没有定义elseTask任务

//gulp.task(name[, deps], fn) 定义任务  name：任务名称 deps：依赖任务名称 fn：回调函数
//gulp.src(globs[, options]) 执行任务处理的文件  globs：处理的文件路径(字符串或者字符串数组) 
//gulp.dest(path[, options]) 处理完后文件生成路径
// gulp.watch('../index1.js', function(event) {
//     console.log('File ' + event.path + ' was ' + event.type + ', running tasks...');
// });