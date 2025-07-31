<?php
if(isset($_POST['botao'])){
    $connection = new \mysqli("localhost","root","","mrlui");
	$connection->set_charset("utf8");
    $sql = "insert into Festa(nome,endereco,cidade,dia) values ('{$_POST['nome']}', '{$_POST['endereco']}', '{$_POST['cidade']}', '{$_POST['dia']}')";
	$result = $connection->query($sql);
    header("location: listaFesta.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Adiciona Festa</title>
</head>
<body>
    <form action='formFesta.php' method='POST'>
        Nome: <input name='nome' type='text' required>
        <br>
        Endereço: <input name='endereco' type='text' required>
        <br>
        Cidade: <input name='cidade' type='text' required>
        <br>
        Dia: <input name='dia' type='text' required>
        <br>
        <input type='submit' name='botao'>
    </form>
</body>
</html>
