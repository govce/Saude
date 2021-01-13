<style>
.btn_inline {
  position: relative;
  display: inline-block;
  height: 2rem;
  margin: 0;
  background-color: #e2e2e2;
  color: #000;
  border-radius: 2px;
  font-size: 0.75rem;
  line-height: 1.875rem;
  vertical-align: top; 
}
</style>
<div>
    <input type="text" class="form-control">
    <button class="btn btn-primary icon icon-search"> Buscar </button>

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