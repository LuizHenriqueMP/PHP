<?php
session_start();
require_once __DIR__."\classes\Usuario.php";
require_once __DIR__."\classes\Navegador.php";
require_once __DIR__."\classes\Voto.php";
$u = new Usuario($_SESSION['email'], $_SESSION['senha']);
$navegadores = Navegador::findall();

if(isset($_POST['botao'])){
    $nav = new Navegador($_POST['nav'] ,"");
    foreach($navegadores as $n){
        if($n->getNome()==$_POST['nav']){
            $nav->setId($n->getId());
        }
    }
    $voto = new Voto($_SESSION['idUsuario'], $nav->getId());
    $voto->save();
    header("Location: resultado.php");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Votação</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
    <header style="margin-bottom:16px"><h1>Votação</h1></header>
    <main class="card">
    <form action="votacao.php" method="post">
        <div>
            <label for="nav">Eu prefiro:</label>
        </div>
        <div class="grid">
            <?php
                foreach($navegadores as $n){
                    echo '
                        <label class="nav-item">
                        <img src="'. $n->getUrl() .'" alt="'.htmlspecialchars($n->getNome()).'">
                        <div class="meta">
                        <h3>'.htmlspecialchars($n->getNome()).'</h3>
                        </div>
                        <div class="radio">
                        <input type="radio" name="nav" value="'. htmlspecialchars($n->getNome()) .'">
                        </div>
                        </label>';
                }
            ?>
        </div>
        <div style="margin-top:12px">
            <button name="botao">Enviar</button>
        </div>
    </form>
    </main>
    </div>
</body>
</html>