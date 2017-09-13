function Jquery(selector){
	var doms=document.getElementsByClassName(selector);
	//objs是selector选择器的dom对象的集合,与实例化对象的OBJ无关，因此要建立两者之间的联系
	this.length=doms.length;
	for(var i=0;i<doms.length;i++){
		this[i]=doms[i]   //this 身上绑定的事件的dom元素身上的事件
	}
}//获取元素，操作文档
Jquery.prototype={
	each:function(callback){
		for(var i=0;i<this.length;i++){
			callback(i,this[i])        //隐式循环**   callback()直接调用时只是简单的循环事件，不是dom对象的事件，因此将this[i](dom对象)传到函数中执行
		//i:dom对象 的下标,在调用时可以通过下标对某个对象进行操作，  this[i]：dom对象
//			callback.call(this[i],i,this[i])
		
		}
	},
	html:function(val){
		if(val){
			this.each(function(index,dom){
//			console.log(index,dom)  获取到所有的dom对象下标及对象
			dom.innerHTML=val;
//			this.innerHTML=val;    //直接使用时this指向的是window
			})
			return this;
		}else{
			this[0].innerHTML;    //如果没有传值，默认获取第一个DOM对象的内容
		}
	},
	text:function(){
		this.each(function(index,dom){
			dom.innerText=val;
		})
		return this;
	},
	css:function(styleobj){
		this.each(function(index,dom){  //样式对象
			for(var i in styleobj){
				dom.style[i]=styleobj[i]
			}
		})
		return this;    //每次执行后返回的都是obj对象    **链式调用
	}
}
////函数调用
//var obj=new Jquery("aa")
//
//obj.html("添加的内容")  //dom中的每一个对象都会有val
//obj.css({width:"200px",height:"200px",background:"red"})
//
//obj.html("添加的内容").css({width:"200px",height:"200px",background:"red"})    //链式调用