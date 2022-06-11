<!DOCTYPE html>
<html lang="pt-br">
<head></head>
<body>

<form class="form-horizontal" action="/pessoa/form/save" method="post">
<fieldset>

<!-- Form Name -->
<legend>Cadastro de Pessoas</legend>


 <!-- criando o id como escondido -->
<input type="hidden" value="<?= $model->id ?>" name="id"/>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="Nome">Nome:</label>  
  <div class="col-md-4">
    <!-- definindo a variavel nome da $model para o valor desse input -->
  <input id="Nome"  name="Nome" value="<?= $model->nome ?>" type="text"  class="form-control input-md">
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="CPF">CPF:</label>  
  <div class="col-md-4">
    <!-- definindo a variavel nome da $model para o valor desse input -->
  <input id="CPF"  name="CPF" value="<?= $model->cpf ?>" type="text" class="form-control input-md">
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="Nascimento">Data Nascimento:</label>  
  <div class="col-md-4">
    <!-- definindo a variavel Data_Nascimento da $model para o valor desse input -->
  <input id="Nascimento"  name="Nascimento" value="<?= $model->Data_Nascimento ?>" type="date"  class="form-control input-md">
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="Email">Email:</label>  
  <div class="col-md-4">
    <!-- definindo a variavel email da $model para o valor desse input -->
  <input id="Email"  name="Email" value="<?= $model->email ?>" type="text"  class="form-control input-md">
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="Telefone">Telefone:</label>  
  <div class="col-md-4">
    <!-- definindo a variavel telefone da $model para o valor desse input -->
  <input id="Telefone"  name="Telefone" value="<?= $model->telefone ?>" type="text"  class="form-control input-md">
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="Endereco">Endereço:</label>  
  <div class="col-md-4">
    <!-- definindo a variavel endereco da $model para o valor desse input -->
  <input id="Endereco"  name="Endereco" value="<?= $model->endereco ?>" type="text"  class="form-control input-md">
    
  </div>
</div>



<!-- button input-->
<button type="submit">Enviar</button>
</fieldset>
</form>

</body>
</html>
