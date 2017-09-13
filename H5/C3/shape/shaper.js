function shape(canvas,copy,cobj) {
    this.canvas=canvas;
    this.cobj=cobj;
    this.copy=copy;
    this.type="line";
    this.fillStyle="#000";
    this.strokeStyle="#000";
    this.lineWidth=1;
    this.arr=[];
    this.num=8;
    this.style="stroke";
    this.xpw=10;
    this.xph=10;
    this.isback=true;  //返回功能判断是否
}
shape.prototype={
    init:function () {
        this.cobj.fillStyle=this.fillStyle;
        this.cobj.strokeStyle=this.strokeStyle;
        this.cobj.lineWidth=this.lineWidth;
    },
    draw:function () {
        var that=this;
        this.copy.onmousedown=function (e) {
            var vw=e.offsetX;
            var vh=e.offsetY;
            that.copy.onmousemove=function (e) {
                that.isback=true;
                var vw1=e.offsetX;
                var vh1=e.offsetY;
                that.cobj.clearRect(0,0,that.canvas.width,that.canvas.height);
                if(that.arr.length>0){
                    that.cobj.putImageData(that.arr[that.arr.length-1],0,0)
                }
                that.init();
                that.cobj.beginPath();
                that[that.type](vw,vh,vw1,vh1);
                that.cobj.stroke();
            }
            that.copy.onmouseup=function () {
                that.arr.push(that.cobj.getImageData(0,0,that.canvas.width,that.canvas.height));
                that.copy.onmouseup=null;
                that.copy.onmousemove=null;
            }
        }
    },
    line:function (vw,vh,vw1,vh1) {
        this.cobj.moveTo(vw,vh);
        this.cobj.lineTo(vw1,vh1);
    },
    rect:function(vw,vh,vw1,vh1){
        this.cobj.rect(vw,vh,vw1-vw,vh1-vh);
        this.cobj[this.style]();
    },
    arc:function (vw,vh,vw1,vh1) {
        var r=Math.sqrt((vw1-vw)*(vw1-vw)+(vh1-vh)*(vh1-vh));
        this.cobj.arc(vw,vh,r,0,2*Math.PI)
        this.cobj[this.style]();
    },
    bian:function (vw,vh,vw1,vh1) {
        var r=Math.sqrt((vw1-vw)*(vw1-vw)+(vh1-vh)*(vh1-vh));
        var angle=360/this.num*Math.PI/180;
        for(var i=0;i<this.num;i++){
            this.cobj.lineTo(vw+r*Math.cos(angle*i),vh+r*Math.sin(angle*i))
        }
        this.cobj[this.style]();
        this.cobj.closePath();
    },
    jiao:function (vw,vh,vw1,vh1) {
        var r=Math.sqrt((vw1-vw)*(vw1-vw)+(vh1-vh)*(vh1-vh));
        var angle=360/this.num*Math.PI/180;
        var r1=r/3;
        this.cobj[this.style]();
        for (var i=0;i<this.num*2;i++){
            if(i%2==0){
                this.cobj.lineTo(vw+r*Math.cos(angle*i),vh+r*Math.sin(angle*i))
            }else {
                this.cobj.lineTo(vw+r1*Math.cos(angle*i),vh+r1*Math.sin(angle*i))
            }
        }
        this.cobj.closePath();
    },
    pen:function () {
        var that=this;
        this.copy.onmousedown=function (e) {
            var vw=e.offsetX;
            var vh=e.offsetY;
            that.init();
            that.cobj.beginPath();
            that.cobj.moveTo(vw,vh)
            that.copy.onmousemove=function (e) {
                var vw1=e.offsetX;
                var vh1=e.offsetY;
                that.cobj.clearRect(0,0,that.canvas.width,that.canvas.height);
                if(that.arr.length>0){
                    that.cobj.putImageData(that.arr[that.arr.length-1],0,0)
                }
                that.cobj.lineTo(vw1,vh1)
                that.cobj.stroke();
            }
            that.copy.onmouseup=function () {
                that.arr.push(that.cobj.getImageData(0,0,that.canvas.width,that.canvas.height));
                that.copy.onmouseup=null;
                that.copy.onmousemove=null;
            }
        }
    },
    xp:function (eles) {
        var that=this;
        that.copy.onmousemove=function (e) {
            var ox=e.offsetX;
            var oy=e.offsetY;
            var x=ox-that.xpw/2;
            var y=oy-that.xph/2;
            //边界判断
            if(x<0){
                x=0;
            }
            if(x>that.cobj.width-that.xpw){
                x=that.cobj.width-that.xpw
            }
            if(y<0){
                y=0;
            }
            if(y>that.cobj.height-that.xph){
                y=that.cobj.height-that.xph
            }
            $(eles).css({display:"block",top:y,left:x})
        }
        that.copy.onmousedown=function () {
            that.copy.onmousemove=function (e) {
                var ox=e.offsetX;
                var oy=e.offsetY;
                var x=ox-that.xpw/2;
                var y=oy-that.xph/2;
                //边界判断
                if(x<0){
                    x=0;
                }
                if(x>that.cobj.width-that.xpw){
                    x=that.cobj.width-that.xpw
                }
                if(y<0){
                    y=0;
                }
                if(y>that.cobj.height-that.xph){
                    y=that.cobj.height-that.xph
                }
                $(eles).css({display:"block",top:y,left:x})
                that.cobj.clearRect(x,y,$(eles).css("width").slice(0,-2),$(eles).css("height").slice(0,-2));
            }
            that.copy.onmouseup=function () {
                that.arr.push(that.cobj.getImageData(0,0,that.canvas.width,that.canvas.height));
                that.copy.onmouseup=null;
                that.copy.onmousemove=null;
                that.xp(eles);
            }
        }
    }
}