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