window.onload=function(){
// 选项卡
	var anniul=$('.daohang')[0];
	var anniu=$("a",anniul);
	var nowIndex=0;
	for(var i=0;i<anniu.length;i++){
		anniu[i].index=i;
		anniu[i].onclick=function(){
			for(var j=0;j<anniu.length;j++){
				anniu[j].className="";
			}
			this.className="first";
		}
	}
	// 下拉框
	$(".linksboxa")[0].onclick=function(){
	$(".hiddena")[0].style.display="block";
}
document.body.onclick=function(e){
	var ev=e||window.event;
	var obj=ev.target||ev.srcElement;
	if(obj.className!=="linksboxa"){
		$(".hiddena")[0].style.display="none";
		}
}

// 下拉列表
var dier=$("dier")[0];
console.log(dier)







}