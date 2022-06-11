<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista Produtos</title>
</head>
<body>
    

<table>
    <tr>
        <th></th>
        <th>Id</th>
        <th>Produto</th>
        <th>Estoque</th>
        <th>Preço</th>
        <th>Categoria</th>
    </tr>
        <?php foreach($model->rows as $item): ?>
<tr>
<td>
   <a href="/produto/delete?id=<?= $item->id?>">X</a>
    </td>

 <td>
     <?= $item->id ?>
    </td>

 <td> 
     <a href="/produto/form?id=<?= $item->id?>"> <?= $item->produto ?> </a>
    </td>

 <td>
     <?= $item->estoque ?>
    </td>
 <td>
     <?= $item->preco ?>
    </td>

 <td>
     <?= $item->id_categoria ?>
    </td>
</tr>
    <?php endforeach ?>
</table>
</body>
</html>