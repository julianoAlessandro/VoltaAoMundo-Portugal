<?php
SESSION_START();
if(!isset($_SESSION['nome'])){
    header('location:usuario-nao-logado.php');
    
}


?>