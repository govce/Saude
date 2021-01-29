<?php
use MapasCulturais\App;

$this->layout = 'panel';

$app = \MapasCulturais\App::i();
$subsite = $app->getCurrentSubsite();
$this->includeMapAssets();  
$this->includeSearchAssets(); 
$this->bodyProperties['ng-app'] = "taxonomies";
$this->jsObject['deleteType'] = "agent";
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
            <div ng-controller="TaxonomiaController">
                <?php 
                    $taxo = [
                        'profissionais_graus_academicos' => 'Grau Acadêmico', 'profissionais_categorias_profissionais' => 'Categoria profissional', 
                        'profissionais_especialidades' => 'Especialidade'
                    ];
                    $this->part('taxonomy/form', ['taxo' => $taxo]); ?>
                <div>
                    <?php $this->part('taxonomy/table-taxonomy'); ?>
                </div>
            </div>
        </div>
    </div>
    
</div>
