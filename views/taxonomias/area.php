<?php
use MapasCulturais\App;

$this->layout = 'panel';

$app = \MapasCulturais\App::i();
$subsite = $app->getCurrentSubsite();
$this->includeMapAssets();  
$this->includeSearchAssets(); 
$this->bodyProperties['ng-app'] = "taxonomies";
$this->jsObject['deleteType'] = "area";
?>
<?php $this->applyTemplateHook('content','before'); ?>
<div class="panel-main-content">
<?php $this->applyTemplateHook('content','begin'); ?>
    <div class="panel panel-default">
        <div class="panel-heading"><?php \MapasCulturais\i::_e('Taxonomias de Área'); ?></div>
        <div class="panel-body">
            <div ng-controller="TaxonomiaController">
                <?php 
                    $taxo = [
                        'area' => 'Área de atuação'
                    ];
                $this->part('taxonomy/form', ['taxo' => $taxo]); ?>
                <div>
                    <?php $this->part('taxonomy/table-taxonomy'); ?>
                </div>
            </div>
        </div>
    </div>
    
</div>
