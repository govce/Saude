<?php
$this->layout = 'panel';
$app = \MapasCulturais\App::i();
?>

<div class="panel-list panel-main-content">
    	<header class="panel-header clearfix">
                <h2>Meus Recursos</h2>

            </header>
    
    <ul class="abas clearfix clear">
            <li class="active"><a href="#ativos" rel="noopener noreferrer" id="tab-ativos">Enviados</a></li>
            <li><a href="#enviadas" rel="noopener noreferrer" id="tab-enviadas">Recebidos</a></li>
    </ul>
    <div id="ativos">
                            <div class="alert info">Você não possui nenhum recurso enviado.</div>
            </div>
    <!-- #ativos-->
    <div id="enviadas" style="display: none;">
                            <div class="alert info">Você não enviou nenhum recruso.</div>
            </div>
    <!-- #lixeira-->
</div>