$(document).ready(function () {
    console.log({urlCreate})
    $("#saveAreaTaxo").click(function (e) { 
        e.preventDefault();
        $.ajax({
          type: "post",
          url: urlCreate,
          data: $('#formCreateTaxoArea').serialize(),
          dataType: "json",
          success: function (response) {
            console.log('sucesso')
            console.log(response)
            $('#formCreateTaxoArea')[0].reset();
            MapasCulturais.Messages.success('Cadastro Realizado.');
          }
        });
      });
      
});
$("#saveLinguagemTaxo").click(function (e) { 
    e.preventDefault();
    $.ajax({
      type: "post",
      url: urlCreate,
      data: $('#formCreateTaxoLinguagem').serialize(),
      dataType: "json",
      success: function (response) {
        console.log('sucesso')
        console.log(response)
        $('#formCreateTaxoLinguagem')[0].reset();
        MapasCulturais.Messages.success('Cadastro Realizado.');
      }
    });
  });