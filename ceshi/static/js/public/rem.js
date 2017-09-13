function size(origin,type){
	type="w"||type;
	if(type=="w"){
		var clientW=$(window).width();
		var bili=clientW/origin*100+"px";
	}else if(type=="h"){
		var clientH=$(window).height();
		var bili=clientH/origin*100+"px";
	}
	document.querySelector("html").style.fontSize=bili;
}
$(document).ready(function(){
	size(750);
})
