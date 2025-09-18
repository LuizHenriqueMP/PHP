<?php
if(isset($_POST['botao'])){
    if(($_POST['usuario'] == "admin") && ($_POST['senha'] == 123) ){
        session_start();
        $_SESSION['admin'] = 1;
        header("location: homepage.php");
    }else{
        header("location: adm_login.php");
    }
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
    <form action="adm_login.php" method="post">
        <div>
            <label for="usuario">Usuario:</label>
            <input type="text" name="usuario" id="usuario">
        </div>
        
        <div>
            <label for="senha">Senha:</label>
            <input type="password" name="senha" id="senha">
        </div>
        <div>
            <input type="submit" value="Entrar" name="botao" id="botao">
        </div>
        <div>
            <a href="index.php">Não sou administrador</a>
        </div>
    </form>
</body>
</html>