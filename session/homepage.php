<?php
session_start();
if(!isset($_SESSION['status'])){
    header("Location: index.html");
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Page</title>
    <script src="script.js" defer></script>
</head>
<body>
    <figure>
        <img id="image" src="src/bolsonic.jpg" alt="Imagem não encontrada">
    </figure>
    <div>
        <input type="button" id="bolsonic" value="Trocar para Bolsonic">
        <input type="button" id="botinho" value="Trocar para Boto Bombado">
        <input type="button" id="frankenstein" value="Trocar para Frankenstein">
    </div>
</body>
</html>