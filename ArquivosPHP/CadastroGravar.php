<?php
require_once "classes/Comentario.php";
$comentario= new Comentario();
$comentario ->nome = $_POST['nome'];
$comentario->email = $_POST['email'];
$comentario ->comentario = $_POST['comentario'];
$comentario ->ComentarioRespondido = 'NÃO RESPONDIDO';
$comentario -> inserir();
?>
