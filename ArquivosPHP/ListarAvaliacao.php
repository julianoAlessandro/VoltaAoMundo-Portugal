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
    <title>Document</title>
    <style>
    <style>
        body{
            background-color: red;
        }
        table{
          
        }
        .tabela{
         
            width:100%;
            display: flex;
    justify-content: center;
            
        }
        </style>

</style>
</head>
<body>
<header>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#"></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="Grafico.php">Desempenho do site</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="ListarAvaliacao.php">Tabela Avaliação</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Login</a>
      </li>
      <li class="nav-item">
        <a class="nav-link disabled" href="#">Sair</a>
      </li>
    </ul>
  </div>
</nav>
</header>
<div class="tabela">
    <table border="1" class=" table table-striped table-sm  table-dark w-50 p-3" >
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
