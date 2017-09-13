//自定义服务
angular.module("services",[])
    //查询数据库信息，用来公共数据的共享
    //在main edit
    //$http已经是$q对象
    .factory("Stuinfo",function($http){
        return $http({url:"/select"});
    })
