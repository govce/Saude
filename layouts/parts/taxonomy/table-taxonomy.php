<div>
    <table class="table table-bordered table-striped" id="" style="width: 100%;">
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
                <a href="#" class="btn btn-success" id="saveInput_{{g.id}}" data-cod="{{g.id}}" data-nome="{{g.nome}}" ng-click="alterTaxo($event)" style="display: none;">Salvar</a>
            </td>
            <td>
                <button class="btn btn-default" data-id="{{g.id}}" data-nome="{{g.nome}}" ng-click="editarTaxo(g.id)">
                    <i class="fa fa-edit"></i> Editar
                </button>
                <a href="#" class="btn btn-danger" ng-click="excluirTaxo(g.id)">
                    <i class="fa fa-trash"></i> Excluir
                </a>
            </td>
        </tr>
        </tbody>
    </table>
</div>