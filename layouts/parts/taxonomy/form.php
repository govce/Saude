<form id="taxonomiaForm">
    <div>
    <?php foreach ($taxo as $key => $value) { ?>
        <button class="badge_default item-taxo" ng-click="chamaTabela('<?php echo $key; ?>','<?php echo $value; ?>')" data-type="" id="btn-taxo_<?php echo $key; ?>">
            <input type="hidden" ng-model="data.taxonomy" value="<?php echo $key; ?>">  <?php echo $value; ?>
        </button> 
    <?php } ?> <span class="required_form">Escolha Obrigatória</span><br>
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