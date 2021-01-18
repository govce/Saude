<form id="taxonomiaForm">
    <div>
        <label class="badge_default" ng-click="chamaTabela('profissionais_graus_academicos')">
            <input type="radio" ng-model="data.taxonomy" value="profissionais_graus_academicos" ng-checked="true">  Grau Acadêmico
        </label>
        <label class="badge_default" 
        ng-click="chamaTabela('profissionais_categorias_profissionais')">
            <input type="radio" ng-model="data.taxonomy" value="profissionais_categorias_profissionais"> Categoria profissional
        </label>
        <label class="badge_default" ng-click="chamaTabela('profissionais_especialidades')">
            <input type="radio" ng-model="data.taxonomy"  value="profissionais_especialidades" > Especialidade
        </label>
    </div>
    <div class="form-group">
        <input type="hidden" name="taxonomy" value="profissionais_graus_academicos" class="form-control" placeholder="taxonomias">
    </div>
    <div class="form-group">
        <label>Nome: </label> <span class="required_form">Obrigatório</span><br>
        <input type="text" ng-model="data.termName" id="term" class="form-control" placeholder="Taxomonias Escrita">
    </div>
    <div class="form-group">
        <label for="">Descrição: </label>
        <input type="text" name="description"  ng-model="data.termDescription" class="form-control" placeholder="Descrição do termo da taxonomia">
        <button id="btn-taxonomy-form" ng-click="saveTaxo(data)" class="btn btn-primary"> 
            <i class="fa fa-save"></i>
        Cadastrar </button>
    </div>
</form>