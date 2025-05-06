<?php

$pokedexkanto = json_decode(file_get_contents("json/pokedex.json"), true);

#echo $pokedexkanto["pokemons"][0]["name"];

foreach($pokedexkanto["pokemons"] as $x){
    echo $x["num"];
    echo " : ";
    echo $x["name"];
    echo "<br>";
}

?>