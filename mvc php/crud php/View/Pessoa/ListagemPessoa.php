<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista Pessoas</title>
</head>
<body>
    
 <!-- criando os campos da tabela -->
<table>
    <tr>
        <th></th>
        <th>Id</th>
        <th>Nome</th>
        <th>CPF</th>
        <th>Data Nascimento</th>
        <th>Email</th>
        <th>Telefone</th>
        <th>Endereço</th>
    </tr>
        <!-- abrindo uma repetição para cada id -->
        <?php foreach($model->rows as $item): ?>
         
<tr>
<td>
   <!-- criando um link que leva ao caminho /pessoa/delete?id=(numero do id)-->
   <a href="/pessoa/delete?id=<?= $item->id?>">X</a>
    </td>
 <td>
     <?= $item->id ?>
</td>

 <td>
    <!-- criando um link que leva ao form com o mesmo id, para fazer o update   -->
   <a href="/pessoa/form?id=<?= $item->id?>">  <?= $item->Nome ?> </a>
    </td>

 <td>
     <!-- inserindo o valor do item CPF no campo da tabela -->
     <?= $item->CPF ?>
    </td>

 <td>
     <!-- inserindo o valor do item Data_Nascimento no campo da tabela -->
     <?= $item->Data_Nascimento ?>
    </td>

 <td>
     <!-- inserindo o valor do item email no campo da tabela -->
     <?= $item->email ?>
    </td>

 <td>
     <!-- inserindo o valor do item telefone no campo da tabela -->
     <?= $item->telefone ?>
    </td>

 <td>
     <!-- inserindo o valor do item Endereco no campo da tabela -->
     <?= $item->Endereco ?>
    </td>

</tr>
    <?php endforeach ?>
</table>
</body>
</html>