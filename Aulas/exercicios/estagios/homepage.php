<?php
require_once __DIR__."\classes\Vaga.php";
$vagas = Vaga::findall();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Bem vindo!!!</h1>
    <?php

    
    echo '
    <form action="cadastrar_vaga.php" method="post">
        <input type="submit" name="cadastrar" value="Cadastrar nova vaga">
    </form>
    ';
    
    echo "<div>";
    foreach($vagas as $v){
        echo "<p>Descrição: ". $v->getDescricao() ."</p>";
        echo "<p> Data de anúncio:".$v->getData()."</p>";
        echo "<p> Empresa: ".$v->getEmpresa()."</p>";
        
        $status = "";
        if($v->getVisivel() == 1){
            $status = "Aberta";
            $status1 = true;
        }else{
            $status = "Fechada";
            $status1 = false;
        }
        if(isset($_POST['visivel'])){
            $status1 = !$status1;
            if($status1 == true){
                $v->setVisivel(1);
                $u = new Vaga($v->getDescricao(), $v->getData(),$v->getEmpresa(), $v->getVisivel());
                $u->setId($v->getId());
                $u->save();
            }else{
                $v->setVisivel(0);
                $u = new Vaga($v->getDescricao(), $v->getData(),$v->getEmpresa(), $v->getVisivel());
                $u->setId($v->getId());
                $u->save();
            }
        }
        echo'
        <form action="homepage.php" method="post">
            <button name="visivel">'.$status.'</button>
        </form>
        ';
        
    }
    echo "</div>";
    ?>
</body>
</html>