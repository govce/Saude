<?php
use MapasCulturais\App;

$this->layout = 'panel';

$app = \MapasCulturais\App::i();
$subsite = $app->getCurrentSubsite();
$this->includeMapAssets();  
$this->includeSearchAssets(); 
$this->bodyProperties['ng-app'] = "taxonomies";
?>
<?php $this->applyTemplateHook('content','before'); ?>
<div class="panel-main-content">
<?php $this->applyTemplateHook('content','begin'); ?>
    <?php if($subsite && $subsite->canUser('modify')):?>
    <p class="highlighted-message" style="margin-top:-2em;">
        <?php printf(\MapasCulturais\i::__('Você é administrador deste subsite. Clique %saqui%s para configurar.'), '<a rel="noopener noreferrer" href="' . $subsite->singleUrl . '">', '</a>'); ?>
    </p>
    <?php endif; ?>
    <div class="panel panel-default">
        <div class="panel-heading">Taxonomias de Agentes</div>
        <div class="panel-body">
            <?php $this->applyTemplateHook('tabs','before'); ?>
            <ul class="abas clearfix">
                <li class="active">
                    <a href="#grau-academico" rel='noopener noreferrer'><?php \MapasCulturais\i::_e("Grau Acadêmico");?>
                    </a>
                </li>
                <li>
                    <a href="#main-inscritos" rel='noopener noreferrer'><?php \MapasCulturais\i::_e("Especialidades");?>
                    </a>
                </li>
                <?php $this->applyTemplateHook('tabs','end'); ?>
            </ul>
            <?php $this->applyTemplateHook('tabs','after'); ?>

            <div id="grau-academico">
                <?php $this->part('academic-degree'); ?>
            </div>
            <div id="main-inscritos">
            <form id="taxonomiaForm">
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
            <button id="btn-taxonomy-form" ng-click="saveTaxo(data, 'profissionais_especialidades')" class="btn btn-primary"> 
                <i class="fa fa-save"></i>
            Cadastrar </button>
        </div>
    </form>
            </div>
        </div>
    </div>
    
</div>
