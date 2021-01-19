(function (angular) {
    "use strict";
    
    var module = angular.module('taxonomies', ['search.service.find', 'infinite-scroll', 'mc.module.notifications']);

    module.config(['$httpProvider', function ($httpProvider) {
        $httpProvider.defaults.headers.post['Content-Type'] = 'application/x-www-form-urlencoded;charset=utf-8';
        $httpProvider.defaults.headers.common["X-Requested-With"] = 'XMLHttpRequest';
        $httpProvider.defaults.transformRequest = function (data) {
            var result = angular.isObject(data) && String(data) !== '[object File]' ? $.param(data) : data;

            return result;
        };
    }]);

    module.factory('TaxonomiaService',['$http'], function($http){
       // var url = new UrlService('taxonmias');
        console.log('url');
    });
    
    module.controller('TaxonomiaController', ['$scope' , '$http', function ($scope , $http) {
        
        $scope.graus = [];
        $scope.data;
        $scope.data = {
            termName: "",
            termDescription: "",
            taxonomy: "profissionais_graus_academicos"
        }
        $scope.totalTaxo = 0;
        $scope.getDataGrau = function(params){
            $http({
                method: 'GET',
                url: MapasCulturais.baseURL+'taxonomias/allData/?params='+params
            }).then(function successCallback(response) {
                console.log(response.data.length)
                $scope.totalTaxo = response.data.length;
                $scope.graus.push(response.data);
            }, function errorCallback(error) {
                console.log(error)
            });
        }

        $scope.getDataGrau('profissionais_graus_academicos');
        $scope.editarTaxo = function (id) {
            console.log()
            // console.log($event.target.dataset.id)
            // var idInput = $scope.data.fields_.concat($event.target.dataset.id);
            // console.log(idInput);
            jQuery("#input_"+id).removeAttr('style');
            jQuery("#saveInput_"+id).removeAttr('style');
            jQuery("#cancelarSave_"+id).removeAttr('style');
        }
        $scope.alterTaxo = function ($event) {
            console.log($event)
            //$event.target.dataset.id
            var data = {id: $event.target.dataset.cod, nome: $event.target.dataset.nome};
            $http.post( MapasCulturais.baseURL+'taxonomias/alterTaxo', data)
            .then(function successCallback(response) {
                $scope.graus = [];
                $("#input_"+$event.target.dataset.cod).css("display","none");
                $("#saveInput_"+$event.target.dataset.cod).css("display","none");
                $scope.getDataGrau('profissionais_graus_academicos');
                new PNotify({
                    title: 'Sucesso!',
                    text: 'Alteração realizado com sucesso.',
                    type: 'success'
                });
            });
        }
        $scope.cancelarSave = function (id) {
            jQuery("#input_"+id).css("display", "none");
            jQuery("#saveInput_"+id).css("display", "none");
            jQuery("#cancelarSave_"+id).css("display", "none");
        }
        $scope.saveTaxo = function (dados) {
            //$event.target.dataset.id
            var data = {taxonomy: dados.taxonomy ,term: dados.termName, description: dados.termDescription};
            console.log({data})
            $http.post( MapasCulturais.baseURL+'taxonomias/create', data)
            .then(function successCallback(response) {
                $scope.graus = [];
                $scope.getDataGrau('profissionais_graus_academicos');
                new PNotify({
                    title: 'Sucesso!',
                    text: 'Cadastro realizado com sucesso.',
                    type: 'success'
                });
            }).catch(function(e){
                console.log(e)
                new PNotify({
                    title: 'Ops!',
                    text: e.data.message,
                    type: 'error'
                });
                throw e;
            }).finally(function() {
                console.log('This finally block');
            });
        }
        $scope.excluirTaxo = function (id) {
            new PNotify({
                title: 'Confirmação!',
                text: 'Deseja realmente excluir esse registro?.',
                hide: false,
                type: 'info',
                closer: false,
                sticker: false,
                destroy: true,
                stack: {"dir1": "down", "dir2": "right", "push": "top", "modal": true, "overlay_close": true},
                confirm: {
                    confirm: true,
                    buttons: [{
                        text: 'Sim',
                        addClass: 'btn btn-default pull-left',
                        click: function(notice) {
                            $http.delete( MapasCulturais.baseURL+'taxonomias/delete/'+id)
                            .then(function successCallback(response) {
                                notice.remove();
                                $scope.graus = [];
                                $scope.getDataGrau('profissionais_graus_academicos');
                                new PNotify({
                                    title: 'Sucesso!',
                                    text: 'Cadastro excluido com sucesso.',
                                    type: 'success'
                                });
                            }).catch(function(e){
                                console.log(e)
                                throw e;
                            }).finally(function() {
                                console.log('This finally block');
                            });
                        }
                       
                    }, {
                        text: 'Não, cancelar',
                        addClass: 'btn btn-default',
                        click: function(notice) {
                            notice.remove();
                        }
                    }]
                },
                buttons: {
                    closer: false,
                    sticker: false
                },
                history: {
                    history: false
                },
            });
        }

        $scope.chamaTabela = function (params) {
            $scope.graus = [];
            $scope.getDataGrau(params);
        }
    }]);


})(angular);
jQuery(document).ready(function() {



});

// $(document).ready(function () {
//     console.log(MapasCulturais.baseURL);
//     PNotify.prototype.options.styling = "brighttheme";
// });
// function editarTaxo(id) {
//     console.log('editarTaxo()' , id);
// }
// $(function () {
   
//     function dataTable() {
//         var graus = [];
//         $.getJSON(MapasCulturais.baseURL+'taxonomias/allData',
//             function (data, textStatus, jqXHR) {
//                 console.log(data);
//                 for (var i = 0; i < data.length; i++) {
//                     $("#table-taxo-grau > tbody").append('<tr>'+
//                         '<td>'+data[i].nome+'</td>'+
//                         '<td><a class="btn btn-default" href="#" onclick="editarTaxo('+data[i].id+')" style="margin: 5px">'+ 
//                             '<i class="fa fa-edit"></i> Editar'+
//                             '</a>'+
//                             '<a class="btn btn-danger" href="#">'+ 
//                             '<i class="fa fa-trash"></i> Excluir'+
//                             '</a>'+
//                         '</td>'+
//                         '</tr>');
//                 }
                
//                 // graus.push(data);
//                 // $("#table-taxo-grau").append('<tbody>'+
//                 //     '<tr><td>'+data[index]+'</td></tr>'+
//                 // '</tbody>')
                
//             }
//         );
//     }

//     dataTable();
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
                new PNotify({
                    title: 'Sucesso!',
                    text: 'Cadastro realizado com sucesso.',
                    type: 'success'
                });
            }
        }).fail(function(request) {
            console.log(request)
            alert(request.responseJSON.message);
            MapasCulturais.Messages.error(request.responseJSON.message);
          });
    });
