function size(origin,type){
	var type=type||"x";
	var originw=origin;
	if(type=="x"){
		var client=$(window).width();
	}else if(type=="y"){
		var client=$(window).height();
	}

var bili = client / originw * 100 + "px";
$("html").css("fontSize", bili);
}

window.onload = function () {
    size(750);
    $("textarea").focus(function(){
    	$(this).html("");
    	$(".zi").html(300-$("textarea").html().length);
    });
    $("textarea")[0].oninput=function(){
    	$(".zi").html(300-$(this).val().length);
    	
    }
}