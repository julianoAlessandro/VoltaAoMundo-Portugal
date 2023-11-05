<?php
require_once "classes/Comentario.php";
$id_lugar = $_POST['id_lugar'];
$comentario = new Comentario($id_lugar);
$comentario->ComentarioRespondido = $_POST['ComentarioRespondido'];
$comentario->atualizar();
header('Location: ListarComentarios.php');

?>

