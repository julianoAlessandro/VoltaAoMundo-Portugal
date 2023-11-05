<?php

require_once "classes/Comentario.php";
$comentario = new Comentario();
$listaComentarios = $comentario -> listar();
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
            <th>Email</th>
            <th>Comentario</th>
            <th>Status do Comentario</th>
        </tr>
        <?php foreach($listaComentarios as $linha): ?>
            <tr>
               <td><?php echo $linha['nome']?></td> 
               <td><?php echo $linha['email']?></td>
               <td><?php echo $linha['comentario']?></td>
              <td><?php echo $linha['ComentarioRespondido']?></td>
             <td><a href="comentarios-editar.php?id_lugar=<?= $linha['id_lugar'] ?>">Dar baixa comentario</a></td>
                
            </tr> 

    <?php endforeach ?>
</table>

</body>
</html>
