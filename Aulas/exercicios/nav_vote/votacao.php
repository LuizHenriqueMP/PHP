<?php

require_once __DIR__."\classes\Usuario.php";
require_once __DIR__."\classes\Navegador.php";
$u = new Usuario($_SESSION['email'], "");
$navegadores = Navegador::findall();
$nav = new Navegador($_POST['nav'] ,$_POST['imagem']);

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
            <?php
                foreach($navegadores as $n){
                    echo '
                    <div>
                        <picture for="nav">
                            <img name="imagem" src="'. $n->getUrl() .'" alt="Imagem não encontrada">
                        </picture>
                        <input type="radio" name="nav" value="'. $n->getNome() .'">'.$n->getNome() .'
                    </div>
                    ';
                }
            ?>
        </div>
        <div>
            <button name="botao">Enviar</button>
        </div>
    </form>
</body>
</html>