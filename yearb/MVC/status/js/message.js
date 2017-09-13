document.addEventListener("DOMContentLoaded",function () {
    var	num=0;
    var nub=0;
    var jindu=document.querySelector(".jindutiao");
    var span=document.querySelector("span");
    var t=setInterval(function(){
        num++;
        nub=num*3;
        if(num==100){
            clearInterval(t);
            location.href="index.php?m=admin&f=index&a=login";
            num=100;
        }
        jindu.style.width=num+"%";
        span.innerHTML=num+"%";
    },10)
})
