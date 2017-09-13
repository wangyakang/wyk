angular.module("Route",["ngRoute"])
    .config(["$routeProvider",function (route) {
        route.when("/",{
            templateUrl:"/tpl/main.html",
            controller:"main"
        })
    }])