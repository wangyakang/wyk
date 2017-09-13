// window.onload=function(){
$(document).ready(function(){
// 选项卡

	// var anniul=$('.daohang')[0];
	// var anniu=$("a",anniul);
	// var nowIndex=0;
	// for(var i=0;i<anniu.length;i++){
	// 	anniu[i].index=i;
	// 	anniu[i].onclick=function(){
	// 		for(var j=0;j<anniu.length;j++){
	// 			anniu[j].className="";
	// 		}
	// 		this.className="first";
	// 	}
	// }

$("daohang a").click(function(){
	$(".daohang").children().removeClass().end().find($(this)).addClass("first");
})


// 轮播


		var now=0;
		var next=0;
		var t=setInterval(move,2000);
		var width=$("ul.m_banner").width();
		function move(type){
			type=type||"r";
			if(type=="r"){
				next=now+1;
				if(next>=$("ul.m_banner li").size()){
					next=0;
				}
				// $("ul.m_banner li").eq(next).css({opacity:0});
				// $("ul.m_banner li").eq(now).css({opacity:0},800);
			}else if(type=="l"){
				next=now-1;
				if(next<0){
					next=$("ul.m_banner li").length-1;
				}
				$("ul.m_banner li").eq(next).animate({opacity:1,zIndex:1000},800);
				$("ul.m_banner li").eq(now).animate({opacity:0});
			}
			$("ul.m_banner li").eq(now).animate({opacity:0},800);			
			$("ul.m_banner li").eq(next).animate({opacity:1,zIndex:1000},800);
			$("ul.dian li").removeClass().eq(next).addClass("firstd");
			now=next;
		}
		// 移入移出
		$("#m_b_box").hover(function(){
			clearInterval(t);
		},function(){
			t=setInterval(move,2000);
		})
		// 轮播点点击
		$("ul.dian li").on("click",function(){
			// console.log($(this).index());
			if($(this).index()>now){
				$("ul.m_banner li").eq($(this).index()).css({opacity:1});
				$("ul.m_banner li").eq(now).animate({opacity:0},800);				
			}
			if($(this).index()<now){
				$("ul.m_banner li").eq($(this).index()).css({opacity:1});
				$("ul.m_banner li").eq(now).animate({opacity:0},800);
			}
			$("ul.m_banner li").eq($(this).index()).animate({opacity:1},800);
			$("ul.dian li").removeClass().eq($(this).index()).addClass("firstd");
			now=$(this).index();
		})







	// var box=$("#m_b_box");
	// console.log(box)
	// var imgli=$("li",$(".m_banner")[0]);
	// console.log(imgli)
	// // var left=$(".left")[0];
	// var dian=$("li",$(".dian")[0]);
	// // var right=$(".right")[0];
	// var t=setInterval(move,2000);
	// var now=0;
	// var next=0;
	// var flag=true;
	// var width=parseInt(getStyle(imgli[0],"width"));
	// console.log(width)
	// function move(type){
	// 	type=type||"r";
	// 	if(type=="r"){
	// 		next=now+1;
	// 		if(next>=imgli.length){
	// 			next=0;
	// 		}
	// 		animate(imgli[now],{opacity:0},500,function(){flag=true});
	// 	}else if(type=="l"){
	// 		next=now-1;
	// 		if(next<0){
	// 			next=imgli.length-1;
	// 		}
	// 		animate(imgli[now],{opacity:0},500);
	// 		animate(imgli[next],{opacity:1,zIndex:1000},500,function(){flag=true});
	// 	}
	// 	if(next>imgli.length-1){
	// 		next=0;
	// 	}
	// 	animate(imgli[next],{opacity:1,zIndex:1000},500);
	// 	dian[now].className="";
	// 	dian[next].className="firstd";
	// 	now=next;
	// }
	// box.onmouseover=function(){
	// 	clearInterval(t);
	// }
	// box.onmouseout=function(){
	// 	t=setInterval(move,2000);
	// }
	
	// for(var i=0;i<dian.length;i++){
	// 	dian[i].index=i;
	// 	dian[i].onclick=function(){
	// 		if(this.index>now){
	// 			imgli[now].style.opacity=1;
	// 			animate(imgli[now],{opacity:0},800);
	// 			animate(imgli[this.index],{opacity:1},800);
	// 			dian[now].className="";
	// 			dian[this.index].className="firstd";
	// 			now=this.index;
	// 		}else if(this.index<now){
	// 			imgli[now].style.opacity=1;
	// 			animate(imgli[now],{opacity:0},800);
	// 			animate(imgli[this.index],{opacity:1},800);
	// 			dian[now].className="";
	// 			dian[this.index].className="firstd";
	// 			now=this.index;
	// 		}
	// 	}
	// }

// 下拉框
// 	$(".linksbox")[0].onclick=function(){
// 	$(".hidden")[0].style.display="block";
// }
// document.body.onclick=function(e){
// 	var ev=e||window.event;
// 	var obj=ev.target||ev.srcElement;
// 	if(obj.className!=="linksbox"){
// 		$(".hidden")[0].style.display="none";
// 		}
// }






// 开启

$(".left_box li").on("click",function(){
	$(".tanchu").css("display","block")
})

// // 关闭按钮
$(".cha").on("click",function(){
	$(".tanchu").css("display","none")
})

$(".guanbi").on("click",function(){
	$(".tanchu").css("display","none")
})

















})
// }







