<?php
if(isset($_POST['botao'])){
    require_once __DIR__."\classes\Vaga.php";
    $v = new Vaga($_POST['descricao'], date("Y-m-d h:i:sa"),$_POST['empresa'],1);
    $v->save();
    header("location: homepage.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Adiciona Vaga</title>
</head>
<body>
    <form action='cadastrar_vaga.php' method='post'>
        <label for='descricao'>Descrição:</label>
        <input type='text' name='descricao' id='descricao' required>
        <label for='empresa'>Empresa:</label>
        <input type='text' name='empresa' id='empresa' required>
        <input type='submit' name='botao' value='Cadastrar'>
    </form>
</body>
</html>

