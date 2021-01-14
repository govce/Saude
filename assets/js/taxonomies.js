// (function() {
//     'use strict';

//     var module = angular.module('taxonomies', ['ngSanitize', 'checklist-model','infinite-scroll']);

//     module.config(['$httpProvider', function ($httpProvider) {
//         $httpProvider.defaults.headers.post['Content-Type'] = 'application/x-www-form-urlencoded;charset=utf-8';
//         $httpProvider.defaults.headers.common["X-Requested-With"] = 'XMLHttpRequest';
//         $httpProvider.defaults.transformRequest = function (data) {
//             var result = angular.isObject(data) && String(data) !== '[object File]' ? $.param(data) : data;

//             return result;
//         };
//     }]);

//     module.factory('TaxonomiaService',['$http', 'UrlService'], function($http,UrlService){
//         var url = new UrlService('taxonomias');
//         console.log({url});
//     });

//     module.controller('TaxonomiaController', ['TaxonomiaService' , '$scope', 'EditBox', '$http', 'UrlService'], function($scope,  TaxonomiaService, EditBox, $http, UrlService) {
//         var labels = MapasCulturais.gettext.opportunityClaim.claimSendError;
//         console.log({labels})
//         $scope.labelTest = "CompliantController";
//     })

// })();
$(document).ready(function () {
    console.log(MapasCulturais.baseURL);
});
$(function () {
    
    $("#taxonomiaForm").click(function (e) { 
        e.preventDefault();
        console.log('taxonomiaForm');
        var form = $("#taxonomiaForm").serialize();
        console.log(form);
       $.ajax({
           type: "POST",
           url: MapasCulturais.baseURL+'taxonomias/create',
           data: form,
           dataType: "json",
           success: function (response) {
               console.log(response)
           }
       });
    });
});