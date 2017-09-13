// 1.兼容：通过类名获取元素
	function getClass(classname,obj){
		var obj=obj||document;		//初始化参数
		if(obj.getElementsByClassName){      //如果存在ClassName,直接保留获取值
			return obj.getElementsByClassName(classname)
		}else{
			var all= obj.getElementsByTagName('*');            //获取所有类名元素	
			var newarr=[];//构建新数组，用来放获取匹配的元素
			for(var i=0;i<all.length;i++){    //遍历获取所有元素，进行匹配
				if(check(all[i].className,classname)){
					newarr.push(all[i])				//如果有匹配参数的元素就追加在新数组中
				}			
			}
			return newarr;    //保留新数组
		}	
	}

	//参数：类名、对象

	
	//通过函数判断每次循环的元素中包含的多个类名与目标类名匹配
	function check(class1,class2){
		var arr=class1.split(" ")
		for(var i=0;i<arr.length;i++){
			if(arr[i]==class2){
				return true;
			}
		}  //循环一次结束后，如果没有匹配，则本次匹配中没有目标参数，在循环结束后返回false
		return false;										
	}
	//getClass("classname")  直接通过类名获取元素

	//var obj=getElementById(" ")
	//getClass("classname",obj)  通过父级获取子级元素，在此之前要先获取父级元素



//2.兼容获取元素的内容（所有元素都可用）

function getText(obj,val){
	if(val==undefined){
		if(obj.innerText){
			return obj.innerText;
		}else{
			return obj.textContent;
		}
	}else{
		if(obj.innerText){
			obj.innerText=val;
		}else{
			obj.textContent=val;
		}
	}
}
	// getText(对象，替换内容)
//3.兼容获取元素的样式
	 //获取属性的值：对象.属性   对象[字符串的属性名]
	function getStyle(obj,attr){
		if(obj.currentStyle){
			return obj.currentStyle[attr];
		}else{
			return getComputedStyle(obj,null)[attr];
		}
	}
	// var aa=document.getElementsByTagName('div')[0]
	// console.log(getStyle(aa,"width"))

//4.获取元素的封装函数
//$('.aa')  ('#aa') ('div')  $(function(){ })
//创建元素  $("<div>")
//传第二个参数  $('.aa',$('div')[0])
//使用window.onload		$(function(){执行代码})
function $(seletor,obj){
	var obj=obj||document
	if(typeof seletor=="string"){ 
		seletor=seletor.replace(/^\s*|\s*$/g,"")  //替换seletor中开头和结尾的空格
		if(seletor.charAt(0)=="."){
			return getClass(seletor.slice(1),obj)
		}else if(seletor.charAt(0)=="#"){
			return document.getElementById(seletor.slice(1),obj)
		}else if(/^[a-z][a-z0-6]{0,8}$/.test(seletor)){  //判断是不是符合标签的类名 第一个可以是a-z，第二个是a-z或0-6的数字，最多能传0-8个字符,对象的方法text()对字符串进行检测，返回值为真假
			return obj.getElementsByTagName(seletor)
		}else if(/^<[a-z][a-z0-6]{0,8}>$/.test(seletor)){
			return document.createElement(seletor.slice(1,-1))
		}	
	}else if(typeof seletor=="function"){
		window.onload=function(){
			seletor()
		}
	}
}

// 5. 获取节点 node
	//1）获取元素节点和不全为空格的文本节点
	// type:"yes"  "no" 考虑是否获取文本节点

	function getChilds(obj,type){
		var arr=[];				//1.建立保留集合的数组 并返回
		var type=type||"no"   //初始化，
		var childs=obj.childNodes;
		for(var i=0;i<childs.length;i++){
			if(type=="no"){
				if(childs[i].nodeType===1){
					arr.push(childs[i])
				}
			}else if(type=="yes"){
				if(childs[i].nodeType==1||childs[i].nodeType==3&&childs[i].nodeValue.replace(/^\s*|\s*$/g,"")){   //判断传入的参数是否是不为空的文本节点或元素节点
					arr.push(childs[i]);
				}
			}
		}

		return arr;
	}
				
	//2）获取第一个节点
		// 	传参：var aa=$('.aa')[1];  
		// getLast(aa,"yes")
		// getFirst(aa,"yes")
		// getNum(aa,4,"yes")
	function getFirst(obj,type){
		type=type||"no"
		if(type=="no"){
			return getChilds(obj,"no")[0]
		}else if(type=="yes"){
			return getChilds(obj,"yes")[0]
		}
	}
	//3）获取最后一个节点
	function getLast(obj,type){
		type=type||"no"
		if(type=="no"){
			return getChilds(obj,"no")[getChilds(obj,"no").length-1]
		}else if(type=="yes"){
			return getChilds(obj,"yes")[getChilds(obj,"yes").length-1]
		}
	}
	//4）获取第n个节点
	function getNum(obj,num,type){
		type=type||"no"
		if(type=="no"){
			return getChilds(obj,"no")[num-1]
		}else if(type=="yes"){
			return getChilds(obj,"yes")[num-1]
		}
	}
	//5）获取下一个节点
	//传参： var bb=$(".bb")[0];
		  // console.log(getNext(bb))
		  // console.log(getNext(bb,"yes"))
	//no:不考虑文本节点,只考虑元素节点   yes:考虑文本节点
	function getNext(obj,type){
		var type=type||"no";
		var next=obj.nextSibling;
		if(next==null){
			return false;
		}
		if(type=="no"){
			while(next.nodeType==3||next.nodeType==8){
				next=next.nextSibling;
				if(next==null){
					return false;
				}
			}			
		}else if(type=="yes"){	
			while(next.nodeType==3&&!next.nodeValue.replace(/^\s*|\s*$/g,"")||next.nodeType==8){
				next=next.nextSibling;
				if(next==null){
					return false;
				}
			}
		}
		return next;
	}
	//6）获取上一个节点

	function getPrev(obj,type){
		var type=type||"no";
		var prev=obj.previousSibling ;
		if(prev==null){
			return false;
		}
		if(type=="no"){
			while(prev.nodeType==3||prev.nodeType==8){
				prev=prev.previousSibling;
				if(prev==null){
					return false;
				}
			}			
		}else if(type=="yes"){	
			while(prev.nodeType==3&&!prev.nodeValue.replace(/^\s*|\s*$/g,"")||prev.nodeType==8){
				prev=prev.previousSibling;
				if(prev==null){
					return false;
				}
			}
		}
		return prev;
	}
	//7）封装insertBefore,不需要找添加对象的父级元素，操作的元素节点
	function insertBefore(newobj,beforeObj){
		var parent=beforeObj.parentNode;
		parent.insertBefore(newobj,beforeObj)
	}
	//8)封装插入某个对象之后
	//var aa=$(.aa)   insertAfter(free,aa)
	function insertAfter(newobj,beforeObj){
		var next=getNext(beforeObj,"yes")
		var parent=beforeObj.parentNode;
		if(next){
			insertBefore(newobj,next);
		}else{
			parent.appendChild(newobj)
		}
	}
	// var aa=$(".aa")[1]
	// var free=document.createElement('a')  
	// insertBefore(free,aa)
//6.事件详解
	//1）事件绑定：同时添加多个事件
	function addEvent(obj,event,fun){
		if(obj.addEventListener){
			obj.addEventListener(event,funEvent,false)
		}else{
			obj.attachEvent("on"+event,funEvent,false);
		}
		return funEvent;    //返回funEvent调用函数的值用于删除事件
		function funEvent(e){         
			//兼容事件对象
			var ev=e||window.event;
			//改变this指针并传递事件对象
			fun.call(obj,ev)			//直接添加函数，函数This指向Obj，需要用  // fun(e):调用fun函数并传参
		}
	}
	//	添加到obj身上的是funEvent,删除的时候删除的是传参fun的funEvent

	var box=$("#box");
	// addEvent(box,"click",fun2) //调用
	// addEvent(box,"click",fun1) //调用


	//去除事件
	function removeEventListener(obj,event,fun){
		if(obj.removeEventListener){
			obj.removeEventListener(event,fun,false)
		}else{
			obj.detachEvent("on"+event,fun)
		}
	}

	// var result2=addEvent(box,"click",fun2);
	// var result1=addEvent(box,"click",fun1);
	// removeEventListener(box,"click",result2);
	// 2)滚动事件
	//运行：var div=$(".div")[0]
		  //mousewheel(div,function1(){},function2(){})
		  //unFun:鼠标向上滚动事件    downFun:鼠标向下滚动事件
	function mousewheel(obj,upFun,downFun){
		if(obj.attachEvent){
			obj.attachEvent("onmousewheel",fun)
		}else{
			obj.addEventListener("mousewheel",fun,false);
			obj.addEventListener("DOMMouseScroll",fun,false);
		}

		function fun(e){
			var ev=e||window.event;
			if(ev.returnValue){    //阻止浏览器的默认事件
				ev.returnValue=false;
			}else{
				ev.preventDefault()
			}
			var num=ev.wheelDelta||ev.detail;
			if(num===-120||num===3){
				downFun.call(obj);  //downFun里直接输入this指向window
			}else if(num===120||num===-3){
				upFun.call(obj)
			}
		}
	}
//7.hover  鼠标移入、移出事件
//判断某个元素是否包含有另外一个元素
	 function contains (parent,child) {
	  if(parent.contains){
	     return parent.contains(child) && parent!=child;
	  }else{
	    return (parent.compareDocumentPosition(child)===20);
	  }
	 }
	
	//判断鼠标是否真正的从外部移入，或者是真正的移出到外部；
	  function checkHover (e,target) {
	   if(getEvent(e).type=="mouseover"){
	      return !contains(target,getEvent(e).relatedTarget || getEvent(e).fromElement)&&
	    !((getEvent(e).relatedTarget || getEvent(e).fromElement)===target)
	   }else{
	    return !contains(target,getEvent(e).relatedTarget || getEvent(e).toElement)&&
	    !((getEvent(e).relatedTarget || getEvent(e).toElement)===target)
	    }
	  }
	//鼠标移入移出事件
	/*
	  obj   要操作的对象
	  overfun   鼠标移入需要处理的函数
	  outfun     鼠标移除需要处理的函数
	*/
	function hover (obj,overfun,outfun) {
	    if(overfun){
	      obj.onmouseover=function  (e) {
	        if(checkHover(e,obj)){
	           overfun.call(obj,[e]);
	        }
	      }
	    }
	    if(outfun){
	      obj.onmouseout=function  (e) {
	        if(checkHover(e,obj)){
	           outfun.call(obj,[e]);
	        }
	      }
	    }
	}
	function getEvent(e){
		return e||window.event
	}
//8.cookie键、值、时间周期
	//创建cooklie：临时2个参数  指定生存周期3个参数
	function setCookie(arrt,value,time){
		if(time){
			var nowtime=new Date();
			nowtime.setTime(nowtime.getTime()+time*1000);
			document.cookie=arrt+"="+value+";expires="+nowtime.toGMTString()
		}else{
			document.cookie=arrt+"="+value;
		}
	}
	// setCookie("aa","bb",20)


	//获取传入coolie键的值
		function getCookie(val){
		var cookies=document.cookie;
		var arr=cookies.split("; ");
		for(var i=0;i<arr.length;i++){
			var brr=arr[i].split("=");
			if(brr[0]==val){
				return brr[1];
			}
		}
		return false;
	}
	// setCookie("aa","bb")
	// getCookie("aa")
	// console.log(getCookie("aa"))


	//删除cookie键
	function delCookie(attr){
		var nowtime=new Date();
		nowtime.setTime(nowtime.getTime()-1);
		document.cookie=attr+"=ash;expires="+nowtime.toGMTString()
	}
	// delCookie("aa")