
function size(originW){
    var clientW=document.documentElement.clientWidth;
    var originW=originW;    //原图设计尺寸
    var bili=clientW/originW*100+"px";
    document.getElementsByTagName("html")[0].style.fontSize=bili;
}
size(375);