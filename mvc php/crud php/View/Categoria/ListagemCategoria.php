<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista Categoria</title>
</head>
<body>
    

<table>
    <tr>
        <th></th>
        <th>Id</th>
        <th>Categoria</th>
        <th>Descrição</th>
    </tr>
        <?php foreach($model->rows as $item): ?>
<tr>
<td> 
     <a href="/categoria/delete?id=<?= $item->id?>">X </a>
    </td>
 <td>
    <?= $item->id ?> 
    </td>

 <td>
 <a href="/categoria/form?id=<?= $item->id?>"> <?= $item->categoria ?> </a>
    </td>

 <td>
     <?= $item->descricao ?>
    </td>
</tr>
    <?php endforeach ?>
</table>
</body>
</html>