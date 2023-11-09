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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="shortcut icon" href="img/portugalredondo.png" type="image/x-icon">
    <link rel="stylesheet" href="estiloAvaliador.css">
    <title>Painel de Avaliações</title>
    <style>
      .centralizar{
       display: flex;
       justify-content: center;
       padding-top:3%;
      }
      body{
        background-color:gray;
      }
      .corAltera{
          color:gray;
        }
   

</style>
</head>
<body class="containe-fluid">
<header>
    <nav class="navbar navbar-expand-lg navbar-light bg-dark">
  <a class="navbar-brand" href="#"></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link  corAltera" href="Grafico.php">Desempenho do site</a>
      </li>
      <li class="nav-item">
        <a class="nav-link  corAltera" href="ListarComentarios.php">ListarComentarios</a>
      </li>
      <li class="nav-item">
        <a class="nav-link  corAltera" href="usuario-logout.php"><img src="errado.png" width="30px"</a>
      </li>
  
    </ul>
  </div>
</nav>
</header>
<div class="col-12 centralizar">
    <table border="4" class=" table table-striped table-sm  table-dark w-50 p-3 col-12 tabela" >
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
        </div>
</body>
</html>
