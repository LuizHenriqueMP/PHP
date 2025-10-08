<?php
if(isset($_POST['botao'])){
    require_once __DIR__."\classes\Usuario.php";
    require_once __DIR__."\classes\Voto.php";
    $u = new Usuario($_POST['email'],$_POST['senha']);
    if($u->authenticate()){
        if(Voto::Votou()){
            header("location: resultado.php");
        }else{
            header("location: votacao.php");
        }
        
    }else{
        header("location: index.php");
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
    <header class="card" style="margin-bottom:16px"><h1>Bem-vindo</h1></header>
    <main class="card">
    <form action="index.php" method="post">
        <div>
            <label for="email">Email: </label>
            <input type="text" name="email" id="email">
        </div>
        <div>
            <label for="senha">Senha: </label>
            <input type="password" name="senha" id="senha">
        </div>
        <button name="botao">Entrar</button>
    </form>
    <p class="small" style="margin-top:12px"><a href="formCadUsuario.php">Não tenho cadastro</a></p>
    </main>
    </div>
</body>
</html>