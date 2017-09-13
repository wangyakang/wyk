$(document).ready(function(){
	//banner
	now=0;
	next=0;
	var flag=true;
	var t=setInterval(move,1500)
	function move(type){
		type=type||"r";
		if(type=="r"){
			next=now+1;
			if(next>$('ul.imgbox li').length-1){
				next=0;
			}
			$('ul.imgbox li').eq(now).animate({opacity:0},800);
			$('ul.imgbox li').eq(next).animate({opacity:1},800,function(){
				flag=true;
			});
		}else if(type=="l"){
			next=now-1;
			if(next<0){
				next=$('ul.imgbox li').length-1;
			}
			$('ul.imgbox li').eq(now).css("opacity",1);
			$('ul.imgbox li').eq(now).animate({opacity:0},500);
			$('ul.imgbox li').eq(next).animate({opacity:1},500,function(){
				flag=true;
			});
		}
		$('.borde li').eq(now).removeClass();
		$('.borde li').eq(next).addClass('first');
		now=next;
	}
	//鼠标移入事件
	$('.imgbox').mouseover(function(){
		clearInterval(t);
	})
	$('.imgbox').mouseout(function(){
		t=setInterval(move,1500);
	})
	//圆点点击事件
	$('.borde li').on('click',function(){
		if($(this).index()>now){
			$('ul.imgbox li').eq(now).css("opacity",1);
			$('ul.imgbox li').eq(now).animate({opacity:0},500)
			$('ul.imgbox li').eq($(this).index()).animate({opacity:1},500)
			
		}else if($(this).index()<now){
			$('ul.imgbox li').eq(now).css("opacity",1);
			$('ul.imgbox li').eq(now).animate({opacity:0},500)
			$('ul.imgbox li').eq($(this).index()).animate({opacity:1},500)
		}
		$('.borde li').eq(now).removeClass();
		$('.borde li').eq($(this).index()).addClass('first');
		now=$(this).index();
	})
})
