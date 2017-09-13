//路由分配路线
angular.module("route",["ngRoute"])
    .config(["$routeProvider",function(route){
        route.when("/",{
            templateUrl:"/html/main.html",   //为了ajax配置地址，在配置文件中配置/html的文件路径
            controller:"main"
        }).when("/edit/:id",{
            templateUrl:"/html/edit.html",
            controller:"edit"
        }).when("/add",{
            templateUrl:"/html/add.html",
            controller:"add"
        })
    }])