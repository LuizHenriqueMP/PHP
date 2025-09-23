<?php

require_once __DIR__."\classes\Usuario.php";
require_once __DIR__."\classes\Navegador.php";
$u = new Usuario($_SESSION['email'], $_SESSION['senha']);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>votacao</h1>
    <form action="votacao.php" method="post">
        <div>
            <label for="nav">Eu prefiro:</label>
        </div>
        <div>
            <div>
                <?php
                    $navegador = Navegador::find(1);
                    
                ?>
                <picture>
                    <img src="" alt="Imagem não encontrada">
                </picture>
                <input type="radio" name="nav" value="Opera">Opera    
            </div>
            <div>
                <picture>
                    <img src="" alt="Imagem não encontrada">
                </picture>
                <input type="radio" name="nav" value="Edge">Edge
            </div>
            <div>
                <picture>
                    <img src="" alt="Imagem não encontrada">
                </picture>
                <input type="radio" name="nav" value="Firefox">Firefox
            </div>
            <div>
                <picture>
                    <img src="" alt="Imagem não encontrada">
                </picture>
                <input type="radio" name="nav" value="Chrome">Chrome
            </div>
        </div>
    </form>
</body>
</html>