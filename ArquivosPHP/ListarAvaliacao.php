<?php

require_once "classes/Avaliacao.php";
$avaliacao = new Avaliacao();
$listaAvaliacao = $avaliacao -> listar();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table border="1">
        <tr>
            <th>Nome</th>
            <th>cidade</th>
            <th>sexo</th>
            <th>idade</th>
            <th>nota</th>
        </tr>
        <?php foreach($listaAvaliacao as $linha): ?>
            <tr>
               <td><?php echo $linha['nome']?></td> 
               <td><?php echo $linha['cidade']?></td>
               <td><?php echo $linha['sexo']?></td>
              <td><?php echo $linha['idade']?></td>
              <td><?php echo $linha['nota']?></td>
            </tr> 

    <?php endforeach ?>
</table>

</body>
</html>
