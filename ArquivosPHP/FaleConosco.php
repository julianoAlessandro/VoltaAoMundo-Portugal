

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fale Conosco</title>
</head>
<body>
    <form action="CadastroGravar.php" method="post">
        <h1>Diga para nois quais são seus lugares favoritos em Portugal</h1>
        <label for = "nome">Nome:</label>
        <input type="text" name = "nome"><br>
        <label for="email">Email:</label>
        <input type="email" name="email"><br>
        <label for="comentario">Comentário:</label>
        <br>
        
        
        <textarea id="comentario" name="comentario" rows="5" cols="40"></textarea><br>
        <input type="submit" value="ENVIAR">
    </form>
</body>
</html>