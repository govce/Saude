(function (angular) {
    "use strict";
    var module = angular.module('resource', []);

    module.config(['$httpProvider', function ($httpProvider) {
        $httpProvider.defaults.headers.post['Content-Type'] = 'application/x-www-form-urlencoded;charset=utf-8';
        $httpProvider.defaults.headers.common["X-Requested-With"] = 'XMLHttpRequest';
        $httpProvider.defaults.transformRequest = function (data) {
            var result = angular.isObject(data) && String(data) !== '[object File]' ? $.param(data) : data;

            return result;
        };
    }]);

    module.factory('resourceService', ['$http', function($http) {
        return {
            storeResource: function (data) {
                return $http.post( MapasCulturais.baseURL+'recursos/store', data)
                .then(function successCallback(response) {
                    return response;
                });
            }
        }
    }]);

    module.controller('resourceController', ['resourceService','$scope' , '$http', function(resourceService, $scope, $http) {
        
        $scope.sendResource = function () {
            var data = jQuery("#formSendResource").serialize();
            resourceService.storeResource(data).then( function(response){ 
                console.log(response)
            })
        }
    }]);
})