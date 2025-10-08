<?php
if(isset($_POST['botao'])){
    require_once __DIR__."\classes\Usuario.php";
    $u = new Usuario($_POST['email'],$_POST['senha']);
    $u->save();
    header("location: index.php");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
    <header class="card" style="margin-bottom:16px"><h1>Cadastro de usuário</h1></header>
    <main class="card">
    <form action="formCadUsuario.php" method="post">
        <div>
            <label for="email">Email: </label>
            <input type="text" name="email" id="email">
        </div>
        <div>
            <label for="senha">Senha: </label>
            <input type="password" name="senha" id="senha">
        </div>
        <button name="botao">Cadastrar</button>
    </form>
    <p class="small" style="margin-top:12px"><a href="index.php">Já sou cadastrado</a></p>
    </main>
    </div>
</body>
</html>