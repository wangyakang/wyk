$(function () {
    var flag=true;
    var height = window.innerHeight || document.documentElement.clientHeight || document.body.clientHeight;
    $(".icon-p").on("click",function () {
        if(flag){
            $(".box-daohang").css({"background":"rgba(0,0,0,1)"});
            $(".blog").css({"background":"rgba(0,0,0,1)","height":height}).slideDown(1700,"swing");
            $(".icon-b .lin1").css({"transform": "translate(0,9px) rotate(45deg)"});
            $(".icon-b .lin2").css({"transform": "translate(0,-3px) rotate(-45deg)"});
            for(var i=0;i<$(".son").length;i++){
                $(".son").eq(i).css({transition:"transform 0.3s linear "+i*0.2+"s",transform:"rotateX(0)"})
            }
            flag=false;
        }else {
            $(".box-daohang").css({"background":"rgba(0,0,0,.8)"});
            $(".blog").css({"background":"rgba(0,0,0,.8)"}).slideUp(1700, "swing");
            $(".icon-b .lin1").css({"transform": "translate(0,0px) rotate(0deg)"});
            $(".icon-b .lin2").css({"transform": "translate(0,0px) rotate(0deg)"});
            for(var i=0;i<$(".son").length;i++){
                var time=($(".son").length-1)*0.2
                $(".son").eq(i).css({transition:"transform 0.3s linear "+(time-i*0.2)+"s"})
                $(".son").eq(i).css({transform:"rotateX(90deg)"})
            }
            flag=true;
        }
    })
    $(window).resize(function(){
        if( $(window).width() > 767 ) {
            $(".box-daohang").css({"background":"rgba(0,0,0,.8)"});
            $(".blog").css("display","none");
            $(".icon-b .lin1").css({"transform": "translate(0,0px) rotate(0deg)"});
            $(".icon-b .lin2").css({"transform": "translate(0,0px) rotate(0deg)"});
            flag=false;
        }
    })
    // //轮播
    var times=3000;
    var next=0;
    var now=0;
    var flag=true,currentTime=0,flag1=true;
    var t1=setInterval(auto,times);
    function auto(type) {
        if(flag){
            flag=false;
            type=type||"r";
            if(type=="r"){
                next++;
                if(next>$(".wheel-list").length-1){
                    next=0;
                    flage1=false;
                }
                $(".wheel-list").eq(now).animate({left:0},1500).css("z-index",4);
                $(".wheel-list a").eq(now).animate({width:"80%",height:"80%"},1500);
                //下一张的变化
                $(".wheel-list ").eq(next).animate({left:0},1500,function(){
                    $(".wheel-list a").eq(now).css({width:"100%",height:"100%"});
                    $(".wheel-list").eq(now).css({left:"100%"})
                    now=next;
                    flag=true;
                }).css("z-index",100);
            }
            if(type=="l"){
                next--;
                if(next<0){
                    next=$(".wheel-list").length-1;
                    flage1=false;
                }
                $(".wheel-list").eq(next).css({left:0})
                $(".wheel-list a").eq(next).css({width:"80%",height:"80%"})
                $(".wheel-list").eq(now).animate({left:"100%"},1500).css("z-index",100);
                //下一张的变化
                $(".wheel-list a").eq(next).animate({width:"100%",height:"100%"},1500);
                $(".wheel-list ").eq(next).animate({left:0},1500,function(){
                    now=next;
                    flag=true;
                }).css("z-index",4);
            }
            currentTime=0;
        }
    }
    //进度条的变化
    var t2=setInterval(progress,50);
    function progress() {
        currentTime+=50;
        var bili=currentTime/times;
        if(bili>1){
            bili=1;
        }
        $(".progress").eq(next).css("width",bili*100+"%");
        if(!flag1){
            $(".progress").css("width",0);
            flag1=true;
        }
    }
    //点击按钮
    $(".btns .btn").click(function () {
        if(flag){
            flag=false;
            var index=$(this).index(".btns .btn");
            next=index;
            stop();
            if(next>now){
                $(".wheel-list").eq(now).animate({left:0},1500).css("z-index",4);
                $(".wheel-list a").eq(now).animate({width:"80%",height:"80%"},1500);
                //下一张的变化
                $(".wheel-list ").eq(next).animate({left:0},1500,function(){
                    $(".wheel-list a").eq(now).css({width:"100%",height:"100%"});
                    $(".wheel-list").eq(now).css({left:"100%"})
                    now=next;
                    flag=true;
                }).css("z-index",100);
            }else if(next<now){
                $(".wheel-list").eq(next).css({left:0})
                $(".wheel-list a").eq(next).css({width:"80%",height:"80%"})
                $(".wheel-list").eq(now).animate({left:"100%"},1500).css("z-index",100);
                //下一张的变化
                $(".wheel-list a").eq(next).animate({width:"100%",height:"100%"},1500);
                $(".wheel-list ").eq(next).animate({left:0},1500,function(){
                    now=next;
                    flag=true;
                }).css("z-index",4);
            }
        }
    })
    function stop() {
        clearTimeout(t1);clearTimeout(t2);
        $(".btns .btn .progress").css("width",0).eq(next).css("width","100%");
    }
    $(".leftBtn").click(function () {
        stop()
        auto("l")
    })
    $(".rightBtn").click(function () {
        stop()
        auto("r")
    })
    // $(window).blur(function () {
    //
    // })
    var widths=$(window).width();
    $(window).resize(function () {
        widths=$(window).width();
    })
    if( widths <767 ) {
        var flag4=true,flag3=true;
        // $(window).resize(function () {
        //     if($(window).width()>=767 ){
        //         flag4=false;
        //         $(".list-middle h3").next().addClass("disna")
        //     }else if($(window).width()<767){
        //         $(".list-middle h3").next().removeClass("disna");
        //         flag4=true;
        //     }
        // })
        $(".list-middle h3").click(function () {
            if(flag3&&flag4){
                $(this).next().slideDown()
                $(this).find(".add-foot").css({"transform": "rotate(45deg)"});
                flag3=false;
            }else if(flag4){
                $(this).next().slideUp()
                $(this).find(".add-foot").css({"transform": "rotate(0deg)"})
                flag3=true;
            }
        })
    }
})