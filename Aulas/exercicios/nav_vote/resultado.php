<?php
session_start();
require_once __DIR__."\classes\Usuario.php";
require_once __DIR__."\classes\Navegador.php";
require_once __DIR__."\classes\Voto.php";
$u = new Usuario($_SESSION['email'], $_SESSION['senha']);
$navegadores = Navegador::findall();
$votos = Voto::findall();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado</title>
</head>
<body>
    <h1>resultado</h1>
   <?php
        $nav_votados = array();
        foreach($navegadores as $n){
            $voto = 0;
            foreach($votos as $v){
                if($n->getId() == $v->getIdNav()){
                    $voto++;
                }
            }
            $nav_votados += [$n->getNome() => $voto];
        }
        foreach($nav_votados as $nav => $vote){
            echo $nav .": ". $vote;
        }
    ?>
</body>
</html>