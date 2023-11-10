<?php
try{
    $nome = $_POST["nome"];
    $senha = hash("md5", $_POST["senha"]);
    $now = new DateTime();
    $date = $now ->format('d-m-Y');
    $sql = "INSERT INTO  administrador(nome,senha,datacad) VALUES ('{$nome}','{$senha}','{$date}')";
    $conexao = new PDO('mysql:host=127.0.0.1;dbname=loginportugal','root','');
    $conexao ->exec($sql);
    echo "<h3>Registro Gravado com sucesso!</h3>";
    echo "<a href='LoginPortugal.html'>Fazer Login </a>";

}
catch(Exception $erro){
    echo $erro ->getMessage();
    echo "Ocorreu um erro.Por favor,tente novamente mais tarde";
    
}