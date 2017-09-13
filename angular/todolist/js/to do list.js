angular.module("myapp",[])
        .control("ctrl",["$scope","$filter",function ($scope,$filter) {
            //源数据
            $scope.data=localStorage.data?JSON.parse($scope.data):[];
            //完成的数据
            $scope.done=localStorage.done?JSON.parse($scope.done):[];
        }])
