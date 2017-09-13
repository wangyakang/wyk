/**
 * Created by 81508 on 2017/2/24.
 */
/*
* javascript
* 原型，所有对象的原型、方法、继承都是来自于原型，最顶层的构造函数是object
*   Object.prototype
*   原型链又叫做继承链，是js的继承规则。
*
* */
/*
* 上传的内容
* 上传的地址
*
*
*
* 解析文件
*
* */
function  upload(url,inputObj,progressObj,imgObj){//设置参数
    var inputObj=inputObj||{};//定义输入的参数inputobj，可能会传入空；
    if(inputObj.nodeName=="INPUT"){//判断输出的参数的条件，如果是标签名为input对象的时候
        this.inputObj=inputObj;
    }else if(typeof inputObj=="string"){//判断如果输入的参数是字符串的时候
        this.inputObj=document.querySelector(inputObj);
    }

    var progressObj=progressObj||{};
    if(progressObj.nodeName=="DIV"){
        this.progressObj=progressObj;
    }else if(typeof progressObj=="string"){
        this.progressObj=document.querySelector(progressObj);
    }

    var imgObj=imgObj||{};
    if(imgObj.nodeName=="IMG"){
        this.imgObj=imgObj;
    }else if(typeof imgObj=="string"){
        this.imgObj=document.querySelector(imgObj);
    }

    this.type=["jpeg","jpg","png","gif"];
    this.size=1024*1024*20;
    this.uploadName="file";
    this.url=url;

}
upload.prototype={
    up:function(callback){
        if(this.url){
            this.callback=callback;
            this.getCon();
        }else {
            alert("请指定路径");
        }
    },
    getCon:function(){
        var that=this;
        this.inputObj.onchange=function(){
            that.data=this.files[0];
            var read=new FileReader();

            read.onload=function(e){
                that.imgObj.src=e.target.result;
            }
            read.readAsDataURL(that.data);

            if(that.check()){
                that.upfile();
            }
        }
    },
    check:function(){
        var that=this;
        // console.log(that.data);
        var data=that.data;
        var size=data.size;
        var extname=data.name.substr(data.name.lastIndexOf(".")+1).toLowerCase();

        if(size>that.size){
            alert("文件太大");
            return false;
        }

        var flag=false;
        for(var i=0;i<that.type.length;i++){
            if(that.type[i]==extname){
                flag=true;
                break;
            }
        }

        if(!flag){
            alert("格式不符");
            return false;
        }

        return true;


    },
    upfile:function(){
        var that=this;
        var ajax=new XMLHttpRequest();
        var form=new FormData();
        form.append(this.uploadName,this.data);

        ajax.upload.onprogress=function(e){
            var total=e.total;
            var loaded=e.loaded;
            var scale=loaded/total*100;
            that.progressObj.style.width=scale+"%";
        }

        ajax.onload=function(){
            // that.callback(ajax.response);
        }


        ajax.open("post",that.url);
        ajax.send(form);
    }
}

