<?php
namespace MapasCulturais;
$this->layout = 'panel';
$admin = $app->user->is('admin');
$app = App::i();
$em = $app->em;
$conn = $em->getConnection();

$query = $conn->fetchAll("SELECT * FROM term WHERE taxonomy = 'area' ");
$totalArea = count($query);
// $app->hook('panel.menu:after', function() use ($app){
//   if(!$app->user->is('admin') && !$app->user->is('staff'))
//       return;

//   $a_class = $this->template == 'panel/em-cartaz' ? 'active' : '';

//   $url = $app->createUrl('panel', 'em-cartaz');
//   echo "<li><a class='$a_class' href='$url'><span class='icon icon-em-cartaz'></span> Em Cartaz</a></li>";
// });
// dump($terms);
// $areas = array_map(function($term) { return $term->term; }, $terms);
// dump($areas);
?>

<div class="panel-list panel-main-content">
  <header class="panel-header clearfix">
		<h2><?php \MapasCulturais\i::_e("Taxonomias");?></h2>
  </header>
  <ul class="abas clearfix clear">
    <li class="active">
      <a href="#area"><?php \MapasCulturais\i::_e("Área");?> (<?php echo $totalArea; ?>)</a>
    </li>
    <li>
      <a href="#linguagem"><?php \MapasCulturais\i::_e("Linguagem");?> (0)</a>
    </li>
  </ul>
  <div id="area">
    <form id="formCreateTaxoArea" method="post">
      <div class="form-group">
        <label for="exampleInputEmail1">Nome da Área</label>
        <input name="term" type="text" class="form-control" placeholder="Nome da área da taxonomia">
        <input type="hidden" name="type" value="area">
      </div>
      <button type="button" id="saveAreaTaxo" class="btn btn-success">Cadastrar área</button>
    </form>
    <table class="table table-striped table-hover" style="width: 100%;">
      <thead>
        <tr>
          <th>Id</th>
          <th>Termo</th>
          <th>Descrição</th>
          <th>Excluir</th>
        </tr>
      </thead>
      <tbody>
        <?php
        foreach ($query as $key => $valueQuery) { ?>
          <tr>
            <th scope="row"><?php echo $query[$key]['id']; ?></th>
            <td>
              <input type="text" name="term" class="form-control" onblur="alterTerm(<?php echo $query[$key]['id']; ?>)" value="<?php echo $query[$key]['term']; ?>" id="term-<?php echo $query[$key]['id']; ?>">
            </td>
            <td>
              <input type="text" name="" class="form-control" value="<?php echo $query[$key]['description']; ?>">
            </td>
            <td>
              <a href="#" class="btn btn-danger" 
                onclick="excluirTaxo(<?php echo $query[$key]['id']; ?>, '<?php echo $query[$key]['term']; ?>', '<?php echo $query[$key]['description']; ?>' )" 
                title="Excluir taxonomia">
                <div class="icon icon-close"></div>
              </a>
            </td>
          </tr>
          <?php } ?>
      </tbody>
  </table>
  </div>
  <div id="linguagem">
    <form id="formCreateTaxoLinguagem" method="post">
      <div class="form-group">
        <label>Nome da Linguagem</label>
        <input name="term" type="text" class="form-control" placeholder="Nome da linguagem da taxonomia">
        <input type="hidden" name="type" value="linguagem">
      </div>
      <button type="button" id="saveLinguagemTaxo" class="btn btn-success">Cadastrar Linguagem</button>
    </form>
  </div>
  <div>

  </div>
  <div id="editable-entity" class="clearfix js-not-editable" style="min-height: 0px; height: 42px; top: 94px; display: none;  width: 50%">
  </div>
  <div id="excluir-taxo" class="modal-wrapper owner">
    <div class="modal"> 
          <h2 class="text-danger">Excluir Taxonomia</h2>
          <p>
            <label>Termo: </label> <strong id="taxoTerm"></strong>
          </p>
          <p>
            <label>Descrição: </label> <strong id="taxoDesc"></strong>
          </p>
          <footer>
          <input type="text" id="inputIdDeleteArea">
            <a class="btn btn-danger" id="btnDeleTaxo" style="float: left">Sim</a>
            <a class="btn btn-default" onclick="MapasCulturais.Modal.close('#excluir-taxo');">Não</a>
          </footer>
    </div>
  </div>
</div><script>
    var urlCreate = '<?php echo $app->createUrl('taxonomias', 'create') ?>';
    var urlUpdate = '<?php echo $app->createUrl('taxonomias', 'update') ?>';
    var url = '<?php echo $app->createUrl('taxonomias', '') ?>';
    MapasCulturais = MapasCulturais || {};
    $(document).ready(function () {
      $("#excluir-taxo").hide();
    });
    function alterTerm(id){
    var termValue = $("#term-"+id).val(); 
    $.ajax({
      type: "post",
      url: urlUpdate,
      data: {id : id, term : termValue, description: 'descrição Lorem Ipsum'},
      dataType: "json",
      success: function (response) {
        MapasCulturais.Messages.success('Taxonomia alterada.');
      }
    });
  }
  function excluirTaxo(idTaxo, term, des) {
    MapasCulturais.Modal.open('#excluir-taxo');
    $("#inputIdDeleteArea").val(idTaxo);
    $("#taxoTerm").text(term);
    $("#taxoDesc").text(des);
  }


</script>
<?php $this->enqueueScript('app', 'taxonomias', 'js/taxonomias.js'); ?>