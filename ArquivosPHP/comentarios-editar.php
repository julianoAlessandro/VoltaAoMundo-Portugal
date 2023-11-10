<?php
require_once "classes/Comentario.php";
$id_lugar = $_GET['id_lugar'];
$comentario = new Comentario($id_lugar);
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        *{
            margin:0;
            padding: 0;

        }
        body{
        
            background-color: #CCCCCC;
           
        
        }
        h1{
            text-align: center;
        }
        h3{
            text-align: center;
        }
        .corpo2{
            width:100%;
            height: 80%;
            display:flex;
            justify-content: center;
            align-items: center;
        }
        .inputs{
            margin: 3%;
    cursor: text;
    width: 50%;
    padding: 2.5px;
    border: 0;
    border-bottom: 2px solid  black;
    outline: 0;
    background: none;
        }
        select {
            width: 70%;
            color:gray;
        }
        .enviar2{
            position: relative;
            left: 20%;
            background-color: gray;
            color:white;
            border-radius: 8px;
            width: 70%;
        }
        .enviar2:hover{
            background-color: red;
        }
        label{
            color:white;
        }
    </style>
    <title>Atualização informação autor</title>

</head>
<body>

<div class="corpo2">
    <form action="comentario-editar-gravar.php" method="POST">
        <h2>Altere o status do Comentario:</h2>
        <input type="hidden" name="id_lugar" value="<?= $comentario->id_lugar ?>">
        <label for="ComentarioRespondido">Defina O novo Status do Comentario:</label>
        <input class="inputs" type="text" name="ComentarioRespondido" value="<?= $comentario->ComentarioRespondido ?>">
        
        <br><br>
    

      <input class="enviar2" type="submit" value="GRAVAR DADOS">
    </div>
  
</body>
</html>