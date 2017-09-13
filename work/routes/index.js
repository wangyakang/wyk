var express = require('express');
var router = express.Router();
var session=require("express-session")
var cookieParser = require('cookie-parser');  //express中封装的处理cookie的包

function middle(req,res,next) {
    if(!req.session.user){
        res.redirect("/login")
    }else {
        next()
    }
}
/* GET home page. */
router.use(session({
    secret: 'index',
    resave: true,
    saveUninitialized: true
}))
router.get('/',middle, function(req, res, next) {

    req.session.user="12";  //服务器中存储值，客户端自动存储秘钥  session
    res.render('index');
});
router.get('/login', function(req, res, next) {
    res.render('login');
});
//引导页
router.get('/welcome', function(req, res, next) {
    res.render('welcome');
});

router.get("/tpl/:name",function(req,res){
    res.sendFile(path.join(process.cwd(),"public/tpl/"+req.params.name))
})
module.exports = router;
