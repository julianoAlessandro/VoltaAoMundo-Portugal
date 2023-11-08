<?php
require_once  'usuario-verifica.php';

$nome = $_POST['nome'];
$senhaLimpa = $_POST['senha'];
$senha = hash("md5",$senhaLimpa);
$conexao = new PDO('mysql:host=127.0.0.1;dbname=loginportugal','root','');
$sql = "SELECT * FROM administrador WHERE nome = :user and senha = :password";
echo $sql;
$resultado = $conexao ->prepare($sql);
$resultado ->bindParam(':user', $nome);
$resultado ->bindParam(':password', $senha);
$resultado ->execute();
$linha = $resultado ->fetch();
$usuario_logado = $linha['nome'];

if($usuario_logado == null)
{
    header('location:usuario-erro.php');
}
else
{
    session_start();
    $_SESSION['nome'] = $usuario_logado;
    header('location:index2.php');
}



