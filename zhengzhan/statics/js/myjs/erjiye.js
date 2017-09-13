$(document).ready(function(){


// 选项卡

$("daohang a").click(function(){
	$(".daohang").children().removeClass().end().find($(this)).addClass("first");
})


// js
	// var anniul=$('.daohang')[0];
	// var anniu=$("a",anniul);
	// var nowIndex=0;
	// for(var i=0;i<anniu.length;i++){
	// 	anniu[i].libs=i;
	// 	anniu[i].onclick=function(){
	// 		for(var j=0;j<anniu.length;j++){
	// 			anniu[j].className="";
	// 		}
	// 		this.className="first";
	// 	}
	// }



// 	// 下拉框
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






// // 选项卡2

$(".captionmenu li").click(function(){	
	$(".captionmenu").children().removeClass().end().find($(this)).addClass("firstaa");
	$(".fanyea li").removeClass().eq($(this).index()).addClass("first1")
})


// 选项卡3
// $(".qitaleibox a").click(function(){	
// 	$(".qitaleibox").children().removeClass().end().find($(this)).addClass("firstaa");
// 	$(".dier div").removeClass().eq($(this).libs()).addClass("first1")
// })


// var captionmenu1=document.getElementsByClassName('captionmenu')[0];
// 	// console.log(captionmenu1)
// 	var captionmenu=captionmenu1.getElementsByTagName('li');
// 	// console.log(captionmenu)
// 	var fanyea1=document.getElementsByClassName('fanyea')[0];
// 		// console.log(fanyea1)
// 	var fanyea=fanyea1.getElementsByTagName('li');
// 		// console.log(fanyea)
// 	var nowIndex=0;
// 	for(var i=0;i<captionmenu.length;i++){
// 		captionmenu[i].libs=i;
// 		captionmenu[i].onclick=function(){
// 			for(var j=0;j<fanyea.length;j++){
// 				captionmenu[j].className="";
// 				fanyea[j].className="";
// 			}
// 			this.className="firstaa";
// 			fanyea[this.libs].className="first1"
// 		}
// 	}



// 下拉导航
$(".qitaleibox").on("click",function(){
	$(".dier").slideToggle("slow");
	$(".qitaleibox a").toggleClass("firstb");
})


// 下拉导航2
$(".linksbox").on("click",function(){
	$(".hidden").slideToggle("fast");
})






})




