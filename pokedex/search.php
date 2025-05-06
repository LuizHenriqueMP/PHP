<?php

$pokedexkanto = json_decode(file_get_contents("json/pokedex.json"), true);
$nome = $_POST["nome"];

foreach($pokedexkanto["pokemons"] as $x){
    if($x["name"] == $nome){
        echo $x["num"];
        echo " : ";
        echo $x["name"];
    }
}

?>