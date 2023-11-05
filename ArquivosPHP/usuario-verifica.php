<?php
SESSION_START();
if(!isset($_SESSION['usuario_logado'])){
    header('location:usuario-nao-logado.php');
}


?>