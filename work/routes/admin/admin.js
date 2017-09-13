var express = require('express');
var router = express.Router();
var mysql=require("../../mysql")

function middle(req,res,next) {
    if(!req.session.admin){
        res.redirect("/admin/login")
    }else {
        next()
    }
}
/* GET home page. */
// router.get('/',middle, function(req, res, next) {
//     res.render('admin');
// });
module.exports = router;
