<?php
$this->layout = 'panel';
$admin = $app->user->is('admin');
$aprovado = $this->aprovado();
?>
<div class="panel-main-content">
    <p class="highlighted-message">
        Olá, <strong><?php echo $app->user->profile->name ?></strong>, bem-vindo ao painel da <?php $this->dict('site: name'); ?>!
    </p>
    <section id="user-stats" class="clearfix">
        <div>
            <div>
                <div class="clearfix">
                    <span class="alignleft">Eventos</span>
                    <div class="icon icon-event alignright"></div>
                </div>
                <div class="clearfix">
                    <a class="user-stats-value hltip" href="<?php echo $app->createUrl('panel', 'events') ?>" title="Ver meus eventos"><?php echo $count->events; ?></a>
                    <a class="icon icon-add alignright hltip" href="<?php echo $app->createUrl('event', 'create'); ?>" title="Adicionar eventos"></a>
                </div>
            </div>
        </div>
        <?php if($admin): ?>
        <div>
            <div>
                <div class="clearfix">
                    <span class="alignleft">Agentes</span>
                    <div class="icon icon-agent alignright"></div>
                </div>
                <div class="clearfix">
                    <a class="user-stats-value hltip" href="<?php echo $app->createUrl('panel', 'agents') ?>" title="Ver meus agentes"><?php echo $count->agents; ?></a>
                    <a class="icon icon-add alignright hltip" href="<?php echo $app->createUrl('agent', 'create'); ?>" title="Adicionar agentes"></a>
                </div>
            </div>
        </div>
        <?php endif; ?>
        <?php $this->applyTemplateHook('form','begin'); ?>
    </section>
</div>