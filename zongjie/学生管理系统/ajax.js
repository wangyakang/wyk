function ajax(obj) {
    if(typeof obj!=="object"){
        console.error("请输入正确的参数");
        return;
    }
    if (typeof obj.url!=="string")  {
        console.error("请输入正确的地址");
        return;
    }

    var url=obj.url;
    var data=obj.data||"";
    if(typeof data=="object"){
        var str="";
        for(var i in data){
            str+=i+"="+data[i]+"&";
        }
        data=str.slice(0,-1);
    }

    var type=obj.type||"get";
    var bool=obj.bool===undefined?true:obj.bool;
    var datatype=obj.dataType||"text";

    var succ=obj.success;
    var error=obj.error;
    var xml=new XMLHttpRequest();
    xml.onreadystatechange=function(){
        if(xml.readyState==4){
            if (xml.status==200){
                var result;
                if(datatype==="xml"){
                    result=xml.responseXML;
                }else{
                    result=xml.response;
                }
                succ(result)
            }else if(xml.status==404){
                var info="页面未找到";
                error(info);
            }
        }
    }
    if (type=="get"){
        xml.open(type,url+"?"+data,bool);
        if(datatype!="xml") {
            xml.responseType = datatype;
        }
        xml.send();
    }
    if (type=="post"){
        xml.open(type,url,bool);
        xml.setRequestHeader("Content-Type","application/x-www-form-urlencoded");
        if(datatype!="xml") {
            xml.responseType = datatype;
        }
        xml.send(data)
    }

}