function size(origin,type){
	var type=type||"x";
	var originw=origin;
	if(type=="x"){
		var client=$(window).width();
	}else if(type=="y"){
		var client=$(window).height();
	}
	var bili=client/originw*100+"px";
	$("html").css("fontSize",bili);
}
$(document).ready(function(){
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
    var swiper = new Swiper('.lyswiper-container', {
//      pagination: '.swiper-pagination',
        slidesPerView: 3,
        paginationClickable: true,
        spaceBetween: 30
    });
    //页面滚动
    var myScroll = new IScroll('.lywrap',{
		probeType:3,
		mouseWheel: true,
    	scrollbars: true
	})
    
    //分享
    touch.on($(".ly-navRight") , "touchstart", function(){
    	$(".lyShare").css("display","block");
    });
	touch.on($(document) , "tap", function(e){
		var ev=e||window.event;
		var Obj =ev.target||ev.srcElement;
		if(Obj.className=="lyShare"){
			$(".lyShare").css("display","none");
		}
   });
})
