<?php
require_once "classes/Avaliacao.php";
$avaliacao= new Avaliacao();
$avaliacao ->nome = $_POST['nome'];
$avaliacao->cidade = $_POST['cidade'];
$avaliacao ->sexo = $_POST['sexo'];
$avaliacao ->idade = $_POST['idade'];
$avaliacao ->nota = $_POST['nota'];
$avaliacao -> inserir();

?>
