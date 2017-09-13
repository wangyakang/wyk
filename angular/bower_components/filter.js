angular.module("filters",[])
    .filter("minOrmax",function () {
        return function (origin,type) {
            var type=type||"min";
            var temp=origin[0]
            for(var i=0;i<origin.length;i++){
                if(type=="min"){
                    if(origin[i]<temp){
                        temp=origin[i];
                    }
                }else if(type=="max"){
                    if(origin[i]>temp){
                        temp=origin[i];
                    }
                }
            }
            return temp;
        }
    }).filter("repeat",function () {
        return function (origin) {
            var arr=[];
            for(var i=0;i<origin.length;i++){
                var flage=true;
                for(var j=i+1;j<origin.length;j++){
                    if(origin[i]==origin[j]){
                        flage=false;
                        break;
                    }
                }
                if(flage){
                    arr.push(origin[i])
                }
            }
            return arr;
        }
})