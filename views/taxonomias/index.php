<?php
$this->layout = 'panel';
$admin = $app->user->is('admin');
$aprovado = $this->aprovado();
?>

<div class="panel-main-content">
<div class="row">
  <div class="col-md-12">
    <a href="<?php echo $app->createUrl('painel', '') ?>" class="btn btn-default">
      Voltar
    </a>
    <hr>
  </div>
</div>
<form id="formCreateTaxoArea" method="post">
  <div class="form-group">
    <label for="exampleInputEmail1">Nome da Área</label>
    <input name="term" type="text" class="form-control" placeholder="Nome da área da taxonomia">
    <input type="hidden" name="type" value="area">
  </div>
  <button type="button" id="saveAreaTaxo" class="btn btn-success">Cadastrar área</button>
</form>
<div class="row">
<br>
<hr>
</div>
<form id="formCreateTaxoLinguagem" method="post">
  <div class="form-group">
    <label>Nome da Linguagem</label>
    <input name="term" type="text" class="form-control" placeholder="Nome da linguagem da taxonomia">
    <input type="hidden" name="type" value="linguagem">
  </div>
  <button type="button" id="saveLinguagemTaxo" class="btn btn-success">Cadastrar Linguagem</button>
</form>
<div id="editable-entity" class="clearfix js-not-editable" style="min-height: 0px; height: 42px; top: 94px; display: none;  width: 50%"></div>
</div>

<script>
    var urlCreate = '<?php echo $app->createUrl('taxonomias', 'create') ?>';

    MapasCulturais = MapasCulturais || {};
</script>
<?php $this->enqueueScript('app', 'taxonomias', 'js/taxonomias.js'); ?>
