<div>
    <div ng-controller="TaxonomiaController">
    <form id="taxonomiaForm">
        <div class="form-group">
        <label for="">{{labelTeste}}</label>
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
    <table class="table table-bordered table-striped" id="table-taxo-grau" style="width: 100%;">
        <thead>
            <tr>
              <th>Nome</th>
              <th>Ação</th>
            </tr>
        </thead>
        <tbody ng-repeat="grau in graus">
        <tr ng-repeat="g in grau">
            <td  id="td_{{g.id}}">
                {{g.nome}}
                <input type="text" ng-model="g.nome" class="form-control" id="input_{{g.id}}" style="display: none;">
                <a href="#" class="btn btn-success" id="saveInput_{{g.id}}" data-cod="{{g.id}}" data-nome="{{g.nome}}" ng-click="saveTaxo($event)" style="display: none;">Salvar</a>
            </td>
            <td>
                <button class="btn btn-default" data-id="{{g.id}}" data-nome="{{g.nome}}" ng-click="editarTaxo(g.id)">
                    <i class="fa fa-edit"></i> Editar
                </button>
                <a href="#" class="btn btn-danger">
                    <i class="fa fa-trash"></i> Excluir
                </a>
            </td>
        </tr>
        </tbody>
    </table>
    </div>
</div>