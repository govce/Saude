
$(document).ready(function () {
    console.log(MapasCulturais.baseURL);
    PNotify.prototype.options.styling = "brighttheme";
});
function editarTaxo(id) {
    console.log('editarTaxo()' , id);
}
$(function () {
   
    function dataTable() {
        var graus = [];
        $.getJSON(MapasCulturais.baseURL+'taxonomias/allData',
            function (data, textStatus, jqXHR) {
                console.log(data);
                for (var i = 0; i < data.length; i++) {
                    $("#table-taxo-grau > tbody").append('<tr>'+
                        '<td>'+data[i].nome+'</td>'+
                        '<td><a class="btn btn-default" href="#" onclick="editarTaxo('+data[i].id+')" style="margin: 5px">'+ 
                            '<i class="fa fa-edit"></i> Editar'+
                            '</a>'+
                            '<a class="btn btn-danger" href="#">'+ 
                            '<i class="fa fa-trash"></i> Excluir'+
                            '</a>'+
                        '</td>'+
                        '</tr>');
                }
                
                // graus.push(data);
                // $("#table-taxo-grau").append('<tbody>'+
                //     '<tr><td>'+data[index]+'</td></tr>'+
                // '</tbody>')
                
            }
        );
    }

    dataTable();
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
});