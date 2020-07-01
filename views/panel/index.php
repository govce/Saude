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
        <?php if($admin): ?>
        <div>
            <div>
                <div class="clearfix">
                    <span class="alignleft">Taxonomias</span>
                    <div class="icon icon-project alignright"></div>
                </div>
                <div class="clearfix">
                    <a href="<?php echo $app->createUrl('taxonomias', 'taxonomias_area') ?>" class="btn btn-success hltip">
                    <span class="glyphicon glyphicon-plus" aria-hidden="true"></span>
                    Adicionar taxonomias
                    </a>
                </div>
            </div>
        </div>
        <?php endif; ?>
    </section>
</div>