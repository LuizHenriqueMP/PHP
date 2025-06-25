<?php

$cantores = array(
    "System of a Down"=>array("nome"=>"System of a Down", "nacionalidade"=>"internacional", "tipo"=>"banda", "estilo"=>"rock", "pontos"=>0, "caminho"=>"/img/system.jfif"), 
    "Tim Maia"=>array("nome"=>"Tim Maia", "nacionalidade"=>"nacional", "tipo"=>"cantor", "estilo"=>"mpb","pontos"=>0, "caminho"=>"/img/timmaia.jfif"), 
    "Lyn"=>array("nome"=>"Lyn", "nacionalidade"=>"internacional", "tipo"=>"cantora", "estilo"=>"jazz","pontos"=>0, "caminho"=>"\img\lyn.jfif"),
    "Racionais Mc"=>array("nome"=>"Racionais MC", "nacionalidade"=>"nacional", "tipo"=>"banda", "estilo"=>"rap","pontos"=>0, "caminho"=>"/img/racionais.jpeg"),
    "Rita Lee"=>array("nome"=>"Rita Lee", "nacionalidade"=>"nacional", "tipo"=>"cantora", "estilo"=>"rock","pontos"=>0, "caminho"=>"/img/ritali.jfif"),
    "John Lenon"=>array("nome"=>"John Lenon", "nacionalidade"=>"internacional", "tipo"=>"cantor", "estilo"=>"rock","pontos"=>0, "caminho"=>"/img/johnlenon.jfif")
);

// Confere se é nacional ou não

if($_POST["nacionalidade"]=="internacional"){
    foreach($cantores as $cantor){
        if($cantor["nacionalidade"]=="internacional"){
            $cantor["pontos"]++;
        }
    }
}else{
    foreach($cantores as $cantor){
        if($cantor["nacionalidade"]=="nacional"){
            $cantor["pontos"]++;
        }
    }
}

// Confere o tipo de cantor, se é banda, cantor ou cantora

if($_POST["tipo"]=="banda"){
    foreach($cantores as $cantor){
        if($cantor["tipo"]=="banda"){
            $cantor["pontos"]++;
        }
    }
}else if($_POST["tipo"]=="cantor"){
    foreach($cantores as $cantor){
        if($cantor["tipo"]=="cantor"){
            $cantor["pontos"]++;
        }
    }
}else{
    foreach($cantores as $cantor){
        if($cantor["tipo"]=="cantora"){
            $cantor["pontos"]++;
        }
    }
}

// Confere o cantor escolhido
$cantor_escolhido = "";
foreach($cantores as $cantor){
    $maior_ponto = 0;
    if($cantor["pontos"]>$maior_ponto){
        $cantor_escolhido = $cantor["nome"];
        $maior_ponto = $cantor["pontos"];
    }
}

echo $cantor_escolhido;

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Você pode gostar de...</h3>

    <figure>
        <img src=<?php $cantores[$cantor_escolhido]["caminho"] ?> alt="Imagem não encontrada...">
    </figure>

    <h3> <?php echo $cantor_escolhido ;?> </h3>
</body>
</html>