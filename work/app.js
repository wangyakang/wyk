var express = require('express');
var path = require('path');
var favicon = require('serve-favicon');
var logger = require('morgan');
var cookieParser = require('cookie-parser');  //express中封装的处理cookie的包
var bodyParser = require('body-parser');
var ejs=require("ejs")
var index = require('./routes/index');
var admin = require('./routes/admin');
var app = express();

// view engine setup
app.set('views', path.join(__dirname, 'views'));
app.set('view engine', 'ejs');

// uncomment after placing your favicon in /public
//app.use(favicon(path.join(__dirname, 'public', 'favicon.ico')));
// app.use(logger('dev'));
app.use(bodyParser.json());
app.use(bodyParser.urlencoded({ extended: false }));
//中间件：接收到请求到返回响应的过程中需要处理的东西，每次都会访问    用户发起请求-》服务器接受请求-》处理-》响应
// app.use(function (req,res,next) {
//     //处理事项
//     console.log(req.cookie.name)
//     console.log(req.signedCookie.age)  //获取加密后的cookie
//     next()   //处理完中间件后继续后续响应
// })

// app.use(cookieParser("admin"));  //调用cookie,并设置秘钥
app.use(express.static(path.join(__dirname, 'public')));
//session值的设置，信息保存在服务器  客户端保存一个秘钥
// app.use(session({
//     secret: 'admin',
//     resave: true,
//     saveUninitialized: true
// }))
// app.get('/login', function(req, res, next) {
//     // res.setHead("Set-Cookie","name")
//     req.session.age="12";  //服务器中存储值，客户端自动存储秘钥  session
//     // res.cookie("age","ok",{signed:true});//设置加密  cookie
//     res.render('login');
// });
//登录页cookie设置  中间件  cookie值的设置
// app.use(function (req,res,next) {
//     if(req.signedCookies.age!="ok"){
//         res.redirect("/login")  //跳转页面
//         res.end();
//     }else {
//         next()
//     }
// })

// app.use(function (req,res,next) {
//     console.log(req.session.age)
//     if(req.session.age!="12"){
//         res.redirect("/login")  //跳转页面
//         res.end();
//     }else {
//         next()
//     }
// })


app.use('/', index);
app.use('/admin', admin);
//登录页面

// catch 404 and forward to error handler
// app.use(function(req, res, next) {
//   var err = new Error('Not Found');
//   err.status = 404;
//   next(err);
// });

// error handler
// app.use(function(err, req, res, next) {
//   // set locals, only providing error in development
//   res.locals.message = err.message;
//   res.locals.error = req.app.get('env') === 'development' ? err : {};
//
//   // render the error page
//   res.status(err.status || 500);
//   // res.render('error');
// });
app.listen(1111)
// module.exports = app;
