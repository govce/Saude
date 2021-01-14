<?php

?>
<div>
    <div >
    <form id="taxonomiaForm">
        <div class="form-group">
            <!-- <label>Taxonomia: </label> <span class="required_form">Obrigatório</span> <br> -->
            <input type="hidden" name="taxonomy" value="profissionais_graus_academicos" class="form-control" placeholder="taxonomias">

        </div>
        <div class="form-group">
            <label>Nome: </label> <span class="required_form">Obrigatório</span><br>
            <input type="text" name="term" id="term" class="form-control" placeholder="Taxomonias Escrita">
        </div>
        <div class="form-group">
            <label for="">Descrição: </label>
            <input type="text" name="description" class="form-control" placeholder="Descrição do termo da taxonomia">
            <button id="btn-taxonomy-form" class="btn btn-primary"> 
                <i class="fa fa-save"></i>
            Cadastrar </button>
        </div>
    </form>
    </div>
    <table class="table table-bordered table-striped" id="table-taxo-grau" style="width: 100%;">
        <thead>
            <tr>
              <th>Nome</th>
              <th>Ação</th>
            </tr>
        </thead>
        <tbody>
           
        </tbody>
    </table>
</div>