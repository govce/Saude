$(document).ready(function () {
  console.log({url})
  //SAVAR TAXONOMIA - AREA
  $("#saveAreaTaxo").click(function (e) { 
      e.preventDefault();
      $.ajax({
        type: "post",
        url: urlCreate,
        data: $('#formCreateTaxoArea').serialize(),
        dataType: "json",
        success: function (response) {
          console.log({response})
          $('#formCreateTaxoArea')[0].reset();
          MapasCulturais.Messages.success('Cadastro Realizado.');
          setTimeout(() => { 
            window.location.reload(true);
          }, 2000);
        },
        error: function (request, status, error) {
          MapasCulturais.Messages.error('Ops! Nome da área é obrigatório');
        }
      });
    });
    
});

//SALVANDO LINGUAGEM
$("#saveLinguagemTaxo").click(function (e) { 
  e.preventDefault();
  $.ajax({
    type: "post",
    url: urlCreate,
    data: $('#formCreateTaxoLinguagem').serialize(),
    dataType: "json",
    success: function (response) {
      $('#formCreateTaxoLinguagem')[0].reset();
      MapasCulturais.Messages.success('Cadastro Realizado.');
      setTimeout(() => { 
          window.location.reload(true);
      }, 2000);
    }
  });

});

$(function () {
  $("#btnDeleTaxo").click(function (e) { 
    e.preventDefault();
    $.ajax({
      type: "delete",
      url: url+'delete',
      data: { id: $("#inputIdDeleteArea").val() },
      dataType: "json",
      success: function (response) {
        MapasCulturais.Messages.success('Taxonomia Excluida.');
        MapasCulturais.Modal.close('#excluir-taxo');
        setTimeout(() => { 
            window.location.reload(true);
        }, 2000);
      }
    });
  });
});