
// 1.兼容的通过类名获取元素
function getClass(classname,obj){

	var obj = obj||document;    //可以替换  参数初始化

	if(obj.getElementsByClassName){    //如果能运行
		return obj.getElementsByClassName(classname);   //返回运行结果
	}else {
		var all =obj.getElementsByTagName('*') ;                     //获取所有元素
				var newarr = [];                                  //返回新数组
				for(var i=0;i<all.length;i++){                 //遍历obj所有元素
					if(check(all[i].className,classname)){			//判断是否与所有元素中的第i个元素
					  newarr.push(all[i]);                  //如果相等，添加到新数组中
					}
				}
				return newarr;                                 //返回新数组
			}

		}         //"aa bb"  "aa"  同样能全部获取


		function check(class1,class2){              //
			var arr =class1.split(" ");           //将第一个数组里面的变成数组
			for (var i = 0; i<arr.length;i++) {    //遍历新数组
				if(arr[i]==class2){              //判断是否相同
					return true;                  //如果相同返回真
				}
			}
			return false;                        //不同返回假。返回上面是空
		}
				
// 2.兼容的获取元素的内容
	// 一个参数 获取元素的内容
	// 两个参数 设置元素的内容
function getText(obj,val){
	if(val==undefined){
		if(obj.innerText) {
			return obj.innerText;
		}else{
			return obj.textContent;
		}
	}else{
		if(obj.innerText) {
			obj.innerText=val;
		}else{
			obj.textContent=val;
			}
		}
	}

	// 3.兼容的获取元素的样式
	//字符串调用：方括号属性名加引号  obj对象.attr具体的属性名
function getStyle(obj,attr){       //获取所有元素的所有样式
	if(obj.currentStyle){      //判断在IE中是否能运行
		return obj.currentStyle[attr];    // 返回输出的样式
		}else {
		return getComputedStyle(obj,null)[attr];  //返回ie输出的样式
		// return getComputedStyle(obj,null).attr;  //返回ie输出的样式
		}
	}


	// 4.$     目的：   标签$("div")   $(".one")   $("#one")       $(function(){})  变相的使用window.onload
function $(seletor,obj){  
    var obj=obj||document;              //
	if(typeof seletor === "string"){
		seletor=seletor.replace(/^\s*|\s*$/g,"")   //替换seletor开头和结尾的空格^开始$结尾*一个或者多个“|”表示或
		if (seletor.charAt(0)=='.') {    //
			// return getClass(seletor.slice(1)) 
			 return getClass(seletor.slice(1),obj)
		} else if(seletor.charAt(0)=="#"){       //
			return document.getElementById(seletor.slice(1))         //
		}else if(/^[a-z][a-z0-6]{0,8}$/.test(seletor)){     //开头是a-z,第二个字符从a-z或者0-6传，{0，8} 传入最多为9个     
			return obj.getElementsByTagName(seletor)      //
		}

		}else if(typeof seletor==="function"){        //
				window.onload=function(){         //
					seletor()
		}
	}
}

// 子元素调出元素节点
// 多个优先级判断&&比||的优先级高
function getChilds(obj,type){
	var arr=[];              //返回的新数组
	var type=type||"no"      //初始化，是或者不是文本类型
	var childs=obj.childNodes;  //声明obj里面所有的子节点

	for(var i=0;i<childs.length;i++){     //遍历所有元素
		if(type=="no"){              //如果不是文本
			if(childs[i].nodeType==1){   //如果是属性
				arr.push(childs[i]);     //添加到
			}
	}else if(type=="yes"){             // 如果是文本
			if(chils[i].nodeType==1||chils[i].nodeType==3&&chils[i].nodeValue.replace(/^\s*|\s*$/g,"")){
				arr.push(childs[i])    //如果是属性或者文本，不全为空格的文本节点
			}
		}
	}
	return arr;
}


// 获取第一个节点
function getFirst(obj,type){
	var type=type||"no"
	if(type=="no"){
		return getChilds(obj,"no")[0];
	}else if(type=="yes"){
		return getChilds(obj,"yes")[0];
	}
}


// 获取最后一个节点
function getLast(obj,type){
	var type=type||"no"
	if(type=="no"){
		return getChilds(obj,"no")[getChilds(obj,"no").length-1];
	}else if(type=="yes"){
		return getChilds(obj,"yes")[getChilds(obj,"yes").length-1];
	}
}


// 从第N个地方插入节点
function getNum(obj,num,type){
	var type=type||"no"
	if(type=="no"){
		return getChilds(obj,"on")[num-1];
	}else if(type=="yes"){
		return getChilds(obj,"yes")[num-1];
	}
}	




// 下一个兄弟节点
function getNext(obj,type){
	var type=type||"no"
	var next=obj.nextSibling;
	if(type=="no"){
		if(next==null){
			return false;
		}
		while(next.nodeType==3||next.nodeType==8){
			next=obj.nextSibling;
			if(next==unll){
				return null;
			}
		}

	}else if(type=="yes"){
			if(next==null){
				return false;
			}
		while(next.nodeType==3&&!next.node.value.replace(/^\s*|\s*$/g,"")||next.nodeType==8){
			next=obj.nextSibling;
			if(next==unll){
				return null;
			}
		}
	}
	return next;
}


// 上一个兄弟节点
function getPre(obj,type){
	var type=type||"no"
	var pre=obj.previousSibling ;
	if(type=="no"){
		if(pre==null){
			return false;
		}
		while(pre.nodeType==3||pre.nodeType==8){
			pre=obj.previousSibling ;
			if(pre==unll){
				return null;
			}
		}

	}else if(type=="yes"){
			if(pre==null){
				return false;
			}
		while(pre.nodeType==3&&!pre.node.value.replace(/^\s*|\s*$/g,"")||pre.nodeType==8){
			pre=obj.previousSibling ;
			if(pre==unll){
				return null;
			}
		}
	}
	return pre;
}


// 封装insertBefore（插入某个对象之前）
function insertBefore(newObj,beforeObj){
	var parent=beforeObj.parentNode;
	parent.insertBefore(newObj,beforeObj)
}

// 封装insertAfter（插入某个对象之后）
function insertAfter(newObj,beforeObj){
	var next=getNext(beforeObj);
	var parent=beforeObj.parentNode;
	if(next){
		insertBefore(newObj,next)
	}else{
		parent.appendChild(newObj)
	}
}