document.addEventListener("DOMContentLoaded",function(){
		var myScroll = new IScroll('.wrap',{
			mouseWheel : true,
		});
		document.addEventListener('touchmove',function(e){
			e.preventDefault();
		},{ passive: false });
})