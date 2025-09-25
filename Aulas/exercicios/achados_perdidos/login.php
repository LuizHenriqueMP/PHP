<?php

if(isset($_POST['botao'])){
    require_once __DIR__."/classes/Usuario.php";
    $u = new Usuario($_POST['email'], $_POST['senha']);
    if($u->authenticate()){
        echo "ok";
        header("Location: restrita.php");
    }else{
        header("Location: login.php");
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <form method="post" action="login.php">
        <label>E-mail:</label>
        <input type="email" name="email" id="email" required>
        <label>Senha:</label>
        <input type="password" name="senha" id="senha" required>
        <input type="submit" name="botao" value="Acessar">
    </form>
</body>
</html>