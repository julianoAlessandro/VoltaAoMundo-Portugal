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
    <link rel="stylesheet" href="comentario.css">
    <link rel="shortcut icon" href="img/portugalredondo.png" type="image/x-icon">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Painel de Comentarios</title>
    <style>
        body{
          background-color: gray;
        }
        table{
          
        }
        .tabela{
         
            width:100%;
            display: flex;
            justify-content: center;
            padding-top:3%;
            
        }
        .corAltera{
          color:gray;
        }
        </style>
</head>
<body>
    <header>
    <nav class="navbar navbar-expand-lg navbar-light bg-dark">
  <a class="navbar-brand" href="#"></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link corAltera" href="Grafico.php">Desempenho do site</a>
      </li>
      <li class="nav-item">
        <a class="nav-link corAltera" href="ListarAvaliacao.php">Listar Avaliações</a>
      </li>
        <li class="nav-item corAltera">
        <a class="nav-link corAltera" href="usuario-logout.php"><img src="errado.png" width="30"></a>
      </li>

    

    </ul>
  </div>
</nav>
</header>
<div class="tabela container">
  <div class="row">
    <table border="4" class=" table table-striped table-sm  table-dark  w-50 p-3 col-sm">
        <tr>
            <th >Nome</th>
            <th>Email</th>
            <th>Comentario</th>
            <th>Status do Comentario</th>
            <th>Alterar Status</th>
        </tr>
        <?php foreach($listaComentarios as $linha): ?>
            <tr>
               <td><?php echo $linha['nome']?></td> 
               <td><?php echo $linha['email']?></td>
               <td><?php echo $linha['comentario']?></td>
              <td><?php echo $linha['ComentarioRespondido']?></td>
             <td><a href="comentarios-editar.php?id_lugar=<?= $linha['id_lugar'] ?>"><img class = "ajustarImagem" src="lapis.png" width="30px"></a></td>
                
            </tr> 

    <?php endforeach ?>
</table>
        </div>
        </div>
</body>
</html>
