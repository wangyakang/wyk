function ajax(obj){
	//对传入参数的类型进行判断
	if(typeof obj!=="object"){
		console.error("请输入正确的参数格式")
		return false;
	}
	//请求地址必传，检测参数是否传入请求地址
	if(typeof obj.url=="undefined"){
		console.error("请输入请求地址")
	}
	//参数初始化
	var url=obj.url;
	var data=obj.data;
	var dataType=obj.dataType||"text"
	var asynch=obj.asynch=="undefined"?ture:obj.asynch;
	var method=obj.method||"get";
	var success=obj.success;
	var erro=obj.erro;
	if(typeof data=="object"){
		var str="";
		for(var i in data){
			str+=i+"="+data[i]+"&";
		}
		data=str.slice(0,-1)
	}
	var ajax=window.XMLHttpRequest?new XMLHttpRequest():new ActiveXObject("Microsoft.XMLHTTP");
	if(method=="get"){
		ajax.open(method,url+"?"+data,asynch);
		ajax.responseType=dataType;
		ajax.send();
	}else if(method=="post"){
		ajax.open(method,url,asynch);
		ajax.responseType=dataType;
		ajax.setRequestHeader("Content-Type","application/x-www-form-urlencoded")
		ajax.send(data);
	}
	ajax.onreadystatechange=function(){
		if(ajax.readyState==4){
			if(ajax.status==200){
				//获取接收的数据
				if(dataType==="xml"){
					var result=ajax.responseXML
				}else{
					var result=ajax.response;
//					console.log(result)
				}
				if(success){
					success(result)
				}
			}else if(ajax.status==404){
				var info="没有发现文件、查询或URl"
				erro(info)
			}else{
				var info="关口过载，服务器使用另一个关口或服务来响应用户，等待时间设定值较长"
				erro(info)
			}
		}
	}
}
//ajax({
//	url:"",   //str[url]  请求地址
//	data:""  ,// str[search]  obj[{}](json格式传数据时不存在+的连接，减少工作出错率）    传入的数据类型；
//	dataType:"",  // "text"(默认文本，字符串形式) xml  document  arraybuffer  bolb(二进制)  json(对象格式)
//				//接收数据格式
//	asynch:true,	//[true] [false]    同步、异步，默认异步
//	method:""  ,   //"get"  "post"   请求方式
//	success:function(e){   //fn[callback]   成功返回执行的操作，对取到的数据进行处理   回调函数
//		console.log(e)
//	},
//	erro:function(e){    
//		console.log(e)
//	}
//})//传参使用json对象的格式，可以对多种类型的数据类型进行处理
