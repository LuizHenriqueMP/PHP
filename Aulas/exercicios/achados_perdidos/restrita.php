<?php
session_start();
if(isset($_SESSION['idUsuario'])){
    header("Location: login.php");
}
require_once __DIR__."/classes/Usuario.php";
require_once __DIR__."/classes/Item.php";
$itens = Item::findall();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mural de achados e perdidos</title>
</head>
<body>
    <h1>Itens Perdidos</h1>
    <?php
        foreach($itens as $item){
            if($item->status == 1){
                echo "{$item->descricao} - {$item->local} - {$item->data}";
                echo "<br>";
            }
        }
    ?>
    <a href="login.php">Login</a>
</body>
</html>