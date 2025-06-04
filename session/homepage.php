<?php
session_start();
if(!isset($_SESSION['status'])){
    header("Location: index.html");
    exit;

    $_SESSION['path'] = "src/bolsonic.jpg";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Page</title>
    <!-- <script src="script.js" defer></script> -->
</head>
<body>
    <form action="homepage.php" method="post">
        <figure>
            <img id="image" name="image" src=<?php echo $_SESSION['path'] ?> alt="Imagem não encontrada">
        </figure>
        <div>
            <input type="submit" name="botao" id="bolsonic" value="Trocar para Bolsonic">
            <input type="submit" name="botao" id="botinho" value="Trocar para Boto Bombado">
            <input type="submit" name="botao" id="frankenstein" value="Trocar para Frankenstein">
        </div>
    </form>
    
    <?php

    if(isset($_POST['botao'])){
        if($_POST['botao']=="Trocar para Bolsonic"){
            $_SESSION['path'] = "src/bolsonic.jpg";
        } elseif($_POST['botao']=="Trocar para Boto Bombado"){
            $_SESSION['path'] = "src/botinho.jpg";
        } elseif($_POST['botao']=="Trocar para Frankenstein"){
            $_SESSION['path'] = "src/frankstein.jfif";
        }
    }
    
    ?>
    
</body>
</html>