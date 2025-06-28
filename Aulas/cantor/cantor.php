<?php

$cantores = [
    "System of a Down"=>["nome"=>"System of a Down", "nacionalidade"=>"internacional", "tipo"=>"banda", "estilo"=>"rock", "pontos"=>0, "caminho"=>"\PHP\Aulas\cantor\img\system.jfif"], 
    "Tim Maia"=>["nome"=>"Tim Maia", "nacionalidade"=>"nacional", "tipo"=>"cantor", "estilo"=>"mpb","pontos"=>0, "caminho"=>"/PHP/Aulas/cantor/img/timmaia.jfif"], 
    "Lyn"=>["nome"=>"Lyn", "nacionalidade"=>"internacional", "tipo"=>"cantora", "estilo"=>"jazz","pontos"=>0, "caminho"=>"/PHP/Aulas/cantor/img/lyn.jfif"],
    "Racionais MC"=>["nome"=>"Racionais MC", "nacionalidade"=>"nacional", "tipo"=>"banda", "estilo"=>"rap","pontos"=>0, "caminho"=>"/PHP/Aulas/cantor/img/racionais.jpeg"],
    "Rita Lee"=>["nome"=>"Rita Lee", "nacionalidade"=>"nacional", "tipo"=>"cantora", "estilo"=>"rock","pontos"=>0, "caminho"=>"/PHP/Aulas/cantor/img/ritali.jfif"],
    "John Lenon"=>["nome"=>"John Lenon", "nacionalidade"=>"internacional", "tipo"=>"cantor", "estilo"=>"rock","pontos"=>0, "caminho"=>"/PHP/Aulas/cantor/img/johnlenon.jfif"]
];

// Confere se é nacional ou não

if($_POST["nacionalidade"]=="internacional"){
    foreach($cantores as &$cantor){
        if($cantor["nacionalidade"]=="internacional"){
            $cantor["pontos"]++;
        }
    }
}else{
    foreach($cantores as &$cantor){
        if($cantor["nacionalidade"]=="nacional"){
            $cantor["pontos"]++;
        }
    }
}

// Confere o tipo de cantor, se é banda, cantor ou cantora

if($_POST["tipo"]=="banda"){
    foreach($cantores as &$cantor){
        if($cantor["tipo"]=="banda"){
            $cantor["pontos"]++;
        }
    }
}else if($_POST["tipo"]=="cantor"){
    foreach($cantores as &$cantor){
        if($cantor["tipo"]=="cantor"){
            $cantor["pontos"]++;
        }
    }
}else{
    foreach($cantores as &$cantor){
        if($cantor["tipo"]=="cantora"){
            $cantor["pontos"]++;
        }
    }
}

// Confere o estilo musical

if(isset($_POST["estilo[]"])){
    foreach($cantores as &$cantor){
        foreach($_POST["estilo[]"] as $estilo){
            if($estilo == $cantor["estilo"]){
                $cantor["pontos"]++;
            }
        }
    }
}

// Confere o cantor escolhido
$cantor_escolhido = "";
$maior_ponto = 0;
foreach($cantores as &$cantor){
    if($cantor["pontos"]>$maior_ponto){
        $cantor_escolhido = $cantor["nome"];
        $maior_ponto = $cantor["pontos"];
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <div>
            <h2>Você pode gostar de...</h3>
        </div>
        <div>
            <figure>
                <img src="<?php echo $cantores[$cantor_escolhido]["caminho"]; ?>" alt="Imagem não encontrada...">
            </figure>
        </div>
        <div>
            <h1> <?php echo $cantor_escolhido ;?> </h1>
        </div>
    </div>
</body>
</html>