
$(document).ready(function(){
	$(".banner_top li:first").css({opacity:1})
	$(".banner_bottom li").mouseover(function(){
		$(".banner_bottom").children().attr({id:""}).end().find($(this)).attr({"id":"cir_banner"})
		$(".banner_top li").css({opacity:0}).eq($(this).index()).animate({opacity:1},500)
	})	
})