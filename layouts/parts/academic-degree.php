<?php

?>
<div>
    <div >
    <form id="taxonomiaForm">
        <div class="form-group">
            <label>Taxonomia: </label> <br>
            <input type="text" name="taxonomy" class="form-control" placeholder="taxonomias">
        </div>
        <div class="form-group">
            <label>Term: </label> <br>
            <input type="text" name="term" class="form-control" placeholder="Taxomonias Escrita">
        </div>
        <div class="form-group">
            <label for="">Descrição: </label>
            <input type="text" name="description" class="form-control" placeholder="Descrição do termo da taxonomia">
            <button id="btn-taxonomy-form" class="btn btn-primary icon icon-add"> Cadastrar </button>
        </div>
    </form>
    </div>
    <table class="table table-bordered table-striped" style="width: 100%;">
        <thead>
            <tr>
              <th>Nome</th>
              <th>Ação</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($graus as $key => $value) { ?>
            <tr>
                <td><?php echo $value; ?></td>
                <td>
                    <a class="btn btn-default" href="#"> Editar</a>
                    <a class="btn btn-danger" href="#"> Excluir</a>
                </td>
            </tr>
            <?php } ?>
        </tbody>
    </table>
</div>