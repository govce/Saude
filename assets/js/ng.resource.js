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
                    buttonReply = value.resource_reply;
                    buttonReply += '<br/><a href="#"  class="text-primary" onclick="eyeContent(reply, '+value.id+')">Ver completo</a>';
                }
                $("#bodyAllResource").append('<tr>'+
                    '<td>'+value.registration_id+'</td>'+
                    '<td class="text-long-table">'+value.resource_text.substring(0, 50)+
                    '<br/><small><a href="#"  class="text-primary" onclick="eyeContent(text, '+value.id+')">Ver completo</a></small></td>'+
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

