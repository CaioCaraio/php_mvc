<!DOCTYPE html>
<html lang="pt-br">
<head></head>
<body>

<form class="form-horizontal" action="/produto/form/save" method="post">
<fieldset>

<!-- Form Name -->
<legend>Cadastro de Produtos</legend>

<input type="hidden" value="<?= $model->id ?>" name="id"/>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="Produto">Produto:</label>  
  <div class="col-md-4">
  <input id="Produto" name="Produto" value="<?= $model->produto ?>" type="text" placeholder="" class="form-control input-md">
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="Estoque">Estoque:</label>  
  <div class="col-md-4">
  <input id="Estoque" name="Estoque" value="<?= $model->estoque ?>" type="text" placeholder="" class="form-control input-md">
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="Preco">Preço:</label>  
  <div class="col-md-4">
  <input id="Preco" name="Preco" value="<?= $model->preco ?>" type="text" placeholder="" class="form-control input-md">
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="Categoria">Categoria:</label>  
  <div class="col-md-4">
  <input id="Categoria" name="Categoria" value="<?= $model->id_categoria ?>" type="text" placeholder="" class="form-control input-md">
    
  </div>
</div>

<button type="submit">Enviar</button>

</fieldset>
</form>

</body>
</html>