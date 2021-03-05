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

function showModalResource(reg, opp, age, oppName) {
    $("#registration_id").val(reg)
    $("#opportunity_id").val(opp)
    $("#agent_id").val(age)
    $("#opportunityNameLabel").html(oppName)
}
// para mudar a cor da class na tr > td
function infoColorStatus(status) {
    var classStatus = '';
    switch (status) {
        case 'Aguardando':
        classStatus = '';
        break;
        case 'Deferido':
        classStatus = 'text-success';
        break;
        case 'Indeferido':
            classStatus = 'text-danger';
        break;
    }

    return classStatus;
}

function getAllResource() {
    $.get(MapasCulturais.baseURL+'recursos/allResource',
        function (data, textStatus, jqXHR) {
            console.log(data);
            $.each(data, function (indexInArray, value) { 
                //formatando a data padrão pt-br
                var dtFormat = moment(value.resource_send).format('DD/MM/YYYY HH:mm:ss');
                //mudando a cor do status
                var textStatus = infoColorStatus(value.resource_status);
                var buttonReply = "--";
                if(value.resource_reply !== null){
                    buttonReply = "<button> Consutar Resposta </button>";
                }
                $("#bodyAllResource").append('<tr>'+
                    '<td>'+value.registration_id+'</td>'+
                    '<td class="text-long-table">'+value.resource_text+'</td>'+
                    '<td>'+dtFormat+'</td>'+
                    '<td class="'+textStatus+'"><strong>'+value.resource_status+'</strong></td>'+
                    '<td>'+buttonReply+'</td>'+
                '</tr></p>'+
                '</tbody>')
            });
            
        }
    );
}


$(document).ready(function () {
    getAllResource();
    $(".formSendResource").submit(function (e) { 
        e.preventDefault();
        var form = $(".formSendResource").serialize();
        $.ajax({
            type: "POST",
            url: MapasCulturais.baseURL+'recursos/store',
            data: form,
            dataType: "json",
            success: function (response) {                
                new PNotify({
                    title: response.title,
                    text: response.message,
                    type: response.type
                });
                setTimeout(() => {
                    location.href = MapasCulturais.baseURL+'painel/inscricoes';                    
                }, 2000);
            }
        });
    });


});