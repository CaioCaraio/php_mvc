<!DOCTYPE html>
<html lang="pt-br">
<head></head>
<body>

<form class="form-horizontal" action="/categoria/form/save" method="post">
<fieldset>

<!-- Form Name -->
<legend>Cadastro de Produtos</legend>

<input type="hidden" value="<?= $model->id ?>" name="id"/>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="Categoria">Categoria:</label>  
  <div class="col-md-4">
  <input id="Categoria" name="Categoria" value="<?= $model->categoria ?>" type="text" placeholder="" class="form-control input-md">
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="Descricao">Descrição:</label>  
  <div class="col-md-4">
  <input id="Descricao" name="Descricao"  value="<?= $model->descricao ?>"type="text" placeholder="" class="form-control input-md">
    
  </div>
</div>

<button type="submit">Enviar</button>

</fieldset>
</form>

</body>
</html>