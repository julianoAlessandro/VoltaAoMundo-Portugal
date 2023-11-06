<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <Style>
        .centralizar{
            display:flex;
            justify-content:center;
            align-items: end;
            padding:80px;
            
        
        }
        h1{
            text-align:center;
        }
    </Style>
    <title>LoginAdminstrador</title>
</head>
<body>
<h1>Login  do Adminstrador do Sistema</h1>
<div class="centralizar">


<form action="usuario-login.php" method="post">
    <input class="inputs" type="text" name="nome" placeholder="Digite seu nome"><br><br>
    <input class="inputs" type="password" name="senha" placeholder="Digite sua senha"><br><br>
    <input   class="btn btn-secondary btn-lg active" type="submit" value="LOGAR"><br><br>

    
</form>    
</div>
</body>
