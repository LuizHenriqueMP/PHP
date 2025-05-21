<?php
$nomes = array("Andersu"=> "Magic","Nicolas"=>"Basquete", "Mathias"=>"Anões");

foreach($nomes as $x=>$y){
    echo "$x : $y <br>";
}

$pokemon = array(
    array("Bulbasaur", 1),
    array("Ivysaur", 2),
    array("Venusaur", 3)
);

echo "Nome: ".$pokemon[0][0]. " Número: ". $pokemon[0][1];

?>