$(document).ready(function () {
    getAllResource();
    $("#formSendResource").submit(function (e) { 
        e.preventDefault();
        var form = $("#formSendResource").serialize();
        $.ajax({
            type: "POST",
            url: MapasCulturais.baseURL+'recursos/store',
            data: form,
            dataType: "json",
            success: function (response) {   
                console.log(response);             
                new PNotify({
                    title: response.title,
                    text: response.message,
                    type: response.type
                });
                setTimeout(() => {
                    location.href = MapasCulturais.baseURL+'painel/inscricoes';                    
                }, 2000);
            }
        }).fail(function(error) {
            console.log(error);
            new PNotify({
                title: error.responseJSON.title,
                text: error.responseJSON.message,
                type: error.responseJSON.type

            });
          });
    });

    $("#formReplyResource").submit(function (event) {
        event.preventDefault();
        var form = $("#formReplyResource").serialize();
        console.log({form})
        var idResource = $("#resource_id").val();
        $.ajax({
            type: "PUT",
            url: MapasCulturais.baseURL+'recursos/replyResource/'+idResource,
            data: form,
            dataType: "json",
            success: function (response) {
                console.log(response)
            }
        });
    });
});

function showModalResource(reg, opp, age, oppName) {
    $("#registration_id").val(reg)
    $("#opportunity_id").val(opp)
    $("#agent_id").val(age)
    $("#opportunityNameLabel").html(oppName)
}

function showModalReply(registration, opportunity, oppName) {
    $("#replyOpportunityNameLabel").html(oppName);
    var data = {
        reg: registration,
        opp: opportunity
    }
    $.get(MapasCulturais.baseURL+'recursos/inforesource', data,
        function (response, textStatus, jqXHR) {
            $("#resourceText").html('<strong>Recurso: </strong>'+response.text);
            $("#resource_id").val(response.id);
        }
    );
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

function eyeContent(text, type) {

    if(type == "resource") {
        $("#titleRemodal").html('Seu recurso.');
    }else{
        $("#titleRemodal").html('Sua resposta.');
    }
    $("#contentMain").html(text);
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
                var reply = "";
                var resource = "resource";

                if(value.resource_reply !== null){
                    buttonReply = value.resource_reply;
                    reply = 'reply';
                    buttonReply += '<br/><a href="#modal-main"  class="text-primary" onclick="eyeContent(`'+value.resource_reply+'`, `'+reply+'`)">Ver completo</a>';
                }
                

                $("#bodyAllResource").append('<tr>'+
                    '<td>'+value.registration_id+'</td>'+
                    '<td class="text-long-table">'+value.resource_text.substring(0, 20)+
                    '<br/><small><a href="#modal-main"  class="text-primary" onclick="eyeContent(`'+value.resource_text+'`, `'+resource+'`)">Ver completo</a></small></td>'+
                    '<td>'+dtFormat+'</td>'+
                    '<td class="'+textStatus+'"><strong>'+value.resource_status+'</strong></td>'+
                    '<td class="text-long-table">'+buttonReply+
                    '</td>'+
                '</tr></p>'+
                '</tbody>')
            });
            
        }
    );
}

