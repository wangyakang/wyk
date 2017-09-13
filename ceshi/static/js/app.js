
	document.addEventListener("DOMContentLoaded",function(){
    	
   		function size(originX){
   			var clientX=document.documentElement.clientWidth;
    		var originX=originX;  //拿到图的尺寸
    		var bili=clientX/originX*100+"px";
    		document.querySelector("html").style.fontSize=bili;
   		}
			size(750);
			
		//轮播

	var swiper = new Swiper('.swiper-container', {
        pagination: '.swiper-pagination',
        effect: 'coverflow',
        grabCursor: true,
        centeredSlides: true,
        slidesPerView: 'auto',
        coverflow: {
            rotate: 50,
            stretch: 0,
            depth: 100,
            modifier: 1,
            slideShadows : true
        }
    });
	//滚动
			var myScroll = new IScroll('.l_wrap', {
			probeType:3,
		    mouseWheel: true,
		    scrollbars: true,
		});
		document.addEventListener('touchmove', function (e){ 
			e.preventDefault(); 
		},false);
			
			
			
			
			
			
			
			
			
			
		
	})

