<?php
session_start();
require_once __DIR__."\classes\Usuario.php";
require_once __DIR__."\classes\Navegador.php";
require_once __DIR__."\classes\Voto.php";
$u = new Usuario($_SESSION['email'], $_SESSION['senha']);
$navegadores = Navegador::findall();
$votos = Voto::findWinner();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
    <header style="margin-bottom:16px"><h1>Resultado</h1></header>
    <main class="card results">
    <?php
        foreach($votos as $v => $i){
            $n = Navegador::find($v);
            echo '
            <div class="result-row">
            <img src="'. $n->getUrl() .'" alt="'.htmlspecialchars($n->getNome()).'" style="width:72px;height:72px;object-fit:cover;border-radius:8px">
            <label>'.htmlspecialchars($n->getNome()) .' - Votos: '.$i.'</label> 
            </div>';
        }
    ?>
    </main>
    </div>
</body>
</html>