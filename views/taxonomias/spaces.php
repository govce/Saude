<?php
use MapasCulturais\App;

$this->layout = 'panel';

$app = \MapasCulturais\App::i();
$subsite = $app->getCurrentSubsite();
$this->includeMapAssets();  
$this->includeSearchAssets(); 
$this->bodyProperties['ng-app'] = "taxonomies";
$this->jsObject['opportunityIdSpace'] = 5;
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
        <div class="panel-heading"><?php \MapasCulturais\i::_e('Taxonomias dos Espaços'); ?></div>
        <div class="panel-body">
            <div ng-controller="TaxonomiaController">
                <?php 
                    $taxo = [
                        'instituicao_tipos_unidades' => 'Tipos de unidade', 'instituicao_tipos_gestao' => 'Tipo de gestão', 
                        'instituicao_servicos' => 'Serviços'
                    ];
                $this->part('taxonomy/form', ['taxo' => $taxo]); ?>
                <div>
                    <?php $this->part('taxonomy/table-taxonomy'); ?>
                </div>
            </div>
        </div>
    </div>
    
</div>
