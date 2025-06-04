<?php

$path = "src/bolsonic.jpg";

if($_POST['bolsonic']=="Trocar para Bolsonic"){
    $path = "src/bolsonic.jpg";
} elseif($_POST['botinho']=="Trocar para Bombado"){
    $path = "src/botinho.jpg";
} elseif($_POST['frankenstein']=="Trocar para Frankenstein"){
    $path = "src/frankstein.jfif";
}

?>