	document.addEventListener("DOMContentLoaded",function(){
    	
   		function size(originX){
   			var clientX=document.documentElement.clientWidth;
    		var originX=originX;  //拿到图的尺寸
    		var bili=clientX/originX*100+"px";
    		document.querySelector("html").style.fontSize=bili;
   		}
			size(750);
	})