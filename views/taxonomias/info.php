<?php
$app = MapasCulturais\App::i();
$this->layout = 'panel';
$subsite = $app->getCurrentSubsite();

$termsGraus = $app->repo('Term')->findBy(['taxonomy' => 'profissionais_graus_academicos']);
$graus = array_map(function($term) { return $term->term; }, $termsGraus);

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
                    <a href="#main-inscritos" rel='noopener noreferrer'><?php \MapasCulturais\i::_e("inscritos");?>
                    </a>
                </li>
                <?php $this->applyTemplateHook('tabs','end'); ?>
            </ul>
            <?php $this->applyTemplateHook('tabs','after'); ?>

            <div id="grau-academico">
                <?php $this->part('academic-degree', array('graus' => $graus)); ?>
            </div>
            <div id="main-inscritos">
                <h1>Inscroitp</h1>
            </div>
        </div>
    </div>
    
</div>
