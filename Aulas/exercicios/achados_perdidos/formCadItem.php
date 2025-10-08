<?php
session_start();
if(!isset($_SESSION['idUsuario'])){
    header("Location: login.php");
}

if(isset($_POST['botao'])){
    require_once __DIR__."/classes/Item.php";
    $novoItem = new Item($_POST['descricao'],$_POST['local']);
    $novoItem->save();
    header("Location: restrita.php");
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastrar item perdido</title>
</head>
<body>
    <form action="formCadItem.php" method="post">
        <label>Descrição</label>
        <input type="text" name="descricao" required>
        <label>Local</label>
        <input type="text" name="local" required>
        <input type="submit" name="botao" value="Adicionar">
    </form>
</body>
</html>