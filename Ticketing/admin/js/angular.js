var app = angular.module('app', []);
app.controller('memberdata',function($scope, $http){
    $http.get("fetch.php").success(function(data){ 
        $scope.members = data; 
    });

    $scope.sort = function(keyname){
        $scope.sortKey = keyname;   
        $scope.reverse = !$scope.reverse;
    }
});