//控制器
angular.module("controllers",[])
    .controller("main",["$scope","$http","Stuinfo",function ($scope,$http,Stuinfo) {
        Stuinfo.then(function(data){
            Stuinfo.data=data.data;  //传址不传值，实现视图数据操作同步变化
            $scope.data=data.data;
        })
        //删除数据
        $scope.del=function (id) {
            $scope.data.forEach(function (obj,index) {
                // console.log(obj)
                if(obj.id==id){
                    $http({url:"/del",params:{id:id}}).then(function (e) {  //e.data为成功之后返回的数据
                        if(e.data=="ok"){
                            $scope.data.splice(index,1)
                        }
                    })
                }
            })
        }
    }])
    .controller("edit",["$scope","$http","Stuinfo","$routeParams",function ($scope,$http,Stuinfo,$routeParams) {
        Stuinfo.then(function(data){
            var id=$routeParams.id;   //当前id
            Stuinfo.data=data.data;  //传址不传值，实现视图数据操作同步变化
            //查找编辑对应的原数据
            Stuinfo.data.forEach(function (obj,index) {
                if(obj.id==id){
                    $scope.data=obj;
                    // console.log($scope.data.name)
                }
            })
        })
        $scope.submit=function (id) {
            var info={};
            //编辑后的数据
            Stuinfo.data.forEach(function (obj,index) {
                if(obj.id==id){
                    info=obj;
                }
            })
            //发动ajax
            $http({url:"/edit",params:info}).then(function (e) {
                alert(e.data)
            })
        }
    }])
    .controller("add",["$scope","$http","Stuinfo","$routeParams",function ($scope,$http,Stuinfo,$routeParams) {
        $scope.add=function () {
            var obj={}
            obj.name=$scope.name;
            obj.age=$scope.age;
            obj.sex=$scope.sex;
            $http({url:"/add",params:obj}).then(function (data) {
                //发动ajax并将id返回用来视图添加
                // console.log(data.data)
                obj.id=data.data;
                Stuinfo.then(function () {
                    Stuinfo.data.push({name:obj.name,age:obj.age,sex:obj.sex,id:obj.id,})
                })
            })
        }
    }])