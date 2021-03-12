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
    <a href="#modal" class="btn btn-primary">Abrir recurso </a>
    <div class="remodal" data-remodal-id="modal">
        <button data-remodal-action="close" class="remodal-close"></button>
        <h1>Remodal</h1>
        <p>
        Responsive, lightweight, fast, synchronized with CSS animations, fully customizable modal window plugin with declarative configuration and hash tracking.
        </p>
        <form action="">
                <input type="text" name="" id="">
                <input type="text" name="" id="">
                <input type="text" name="" id="">
        
        </form>
        <br>
        <button data-remodal-action="cancel" class="btn btn-default">Cancel</button>
        <button data-remodal-action="confirm" class="remodal-confirm">OK</button>
    </div>
</div>