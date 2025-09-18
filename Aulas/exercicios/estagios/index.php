<?php
if(isset($_POST['botao'])){
    header("location: homepage.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div>
        <h1>Bem vindo usuário!!!</h1>
    </div>
    <form action="index.php" method="post">
        <input type="submit" name="botao" value="Entrar no sistema">
    </form>
    <div>
        <a href="adm_login.php">Sou administrador</a>
    </div>
</body>
</html>