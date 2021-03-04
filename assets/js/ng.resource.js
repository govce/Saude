(function (angular) {
    "use strict";
    console.log('inicio de ng.resource.js');
    var module = angular.module('resource', ['search.service.find', 'infinite-scroll', 'mc.module.notifications']);
    module.config(['$httpProvider', function ($httpProvider) {
        $httpProvider.defaults.headers.post['Content-Type'] = 'application/x-www-form-urlencoded;charset=utf-8';
        $httpProvider.defaults.headers.common["X-Requested-With"] = 'XMLHttpRequest';
        $httpProvider.defaults.transformRequest = function (data) {
            var result = angular.isObject(data) && String(data) !== '[object File]' ? $.param(data) : data;

            return result;
        };
    }]);

    module.factory('resourceService', ['$http', function($http) {
        console.log('resourceService')
        return {
            storeResource: function (data) {
                return $http.post( MapasCulturais.baseURL+'recursos/store', data)
                .then(function successCallback(response) {
                    return response;
                });
            }
        }
    }]);

    module.controller('resourceController', ['$scope' , '$http', 'resourceService', function(resourceService, $scope, $http) {
        console.log('resourceController');
        $scope.sendResource = function () {
            var data = jQuery("#formSendResource").serialize();
            resourceService.storeResource(data).then( function(response){ 
                console.log(response)
            })
        },

        $scope.chamaAlert = function () {
            console.log('chamour!!!')
        }
    }]);

})(angular);


$(document).on('opened', '.remodal', function () {
    console.log('Modal is opened');
    setTimeout(() => {
        $(this).remodal('close');
    }, 2000);
});

$(document).ready(function () {
    var inst = $.remodal.lookup[$('[data-remodal-id=modal]').data('remodal')];
    $("#formSendResource").attr('action' , MapasCulturais.baseURL+'recursos/store');
    // // open a modal
    // inst.open();
    
    // close a modal
    // .submit(function (e) { 
    //     e.preventDefault();
    //     var form = $("#formSendResource").serialize();
    //     console.log(form);
    //     $.ajax({
    //         type: "POST",
    //         url: MapasCulturais.baseURL+'recursos/store',
    //         data: form,
    //         dataType: "json",
    //         success: function (response) {
    //             console.log(response)
    //             var inst = $.remodal.lookup[$('[data-remodal-id=#modal-735327624]').data('remodal')];
    //             inst.close();
    //             new PNotify({
    //                 title: response.title,
    //                 text: response.message,
    //                 type: response.type
    //             });
    //         }
    //     });
    // });
});