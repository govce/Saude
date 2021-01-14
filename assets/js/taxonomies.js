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
    
    function dataTable() {
        var graus = [];
        $.getJSON(MapasCulturais.baseURL+'taxonomias/allData',
            function (data, textStatus, jqXHR) {
                
                for (var i = 0; i < data.length; i++) {
                    $("#table-taxo-grau > tbody").append('<tr>'+
                        '<td>'+data[i]+'</td>'+
                        '<td><a class="btn btn-default" href="#">'+ 
                            '<i class="fa fa-edit"></i> Editar'+
                            '</a>'+
                            '<a class="btn btn-danger" href="#">'+ 
                            '<i class="fa fa-trash"></i> Excluir'+
                            '</a>'+
                        '</td>'+
                        
                        '</tr>');
                    console.log(data[i]);
                }
                
                // graus.push(data);
                // $("#table-taxo-grau").append('<tbody>'+
                //     '<tr><td>'+data[index]+'</td></tr>'+
                // '</tbody>')
                
            }
        );
    }

    dataTable();
});
$(function () {
    

    $("#btn-taxonomy-form").click(function (e) { 
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
                $('#taxonomiaForm')[0].reset();
                dataTable();
                console.log(response)
            }
        }).fail(function(request) {
            console.log(request)
            alert(request.responseJSON.message);
            MapasCulturais.Messages.error(request.responseJSON.message);
          });
    });
});