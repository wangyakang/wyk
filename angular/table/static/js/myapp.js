angular.module("myapp",["ngRoute","ngAnimate"])
    .config(function ($routeProvider) {//设置路由
        $routeProvider.when("/",{
            templateUrl:"/ejs/table.ejs",//给ajax指定路径
            controller: 'ctrl'
        }).when("/add",{
            templateUrl:"/ejs/add.ejs",
            controller: 'add'
        })
    })
    .controller("ctrl",["$scope","$http",function ($scope,$http) {
            $scope.isshow=false;
            $http({
                method: 'GET',
                url: '/index'
            }).then(function (data) {
                // 请求成功执行代码
                console.log(data.data)
                $scope.data=data.data;
            }, function (response) {
                // 请求失败执行代码
                alert("数据库连接错误")
            });
            $scope.del=function (id) {//删除视图中的数据
                $scope.isshow=true;
                $http({method:"get",url:"/del",params:{id:id}}).then(function (row) {
                    if(row.data=="ok"){
                        $scope.data.forEach(function(obj,index) {
                            if (obj.id == id) {
                                $scope.data.splice(index, 1);
                            }
                        })
                    }
                })
            }
            $scope.update=function (id,val,ziduan) {
                $http({method:"get",url:"/update",params:{id:id,val:val,ziduan:ziduan}}).then(function (row) {
                    $scope.isshow=true;
                    if(row.data=="ok"){
                        $scope.isshow=false;
                    }
                })
            }
    }])
    .controller("add",["$scope","$http",function ($scope,$http) {
            $scope.add=function (name,sex,age) {
                $scope.name="";
                $scope.sex="";
                $scope.age="";
                $http({url:"/add",params:{name:name,sex:sex,age:age}}).then(function(e){
                    if(e=="ok"){
                        console.log(name,sex,age)
                    }
                })
            }
    }])