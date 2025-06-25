<?php

// 5. Faça uma página PHP que exiba os números ímpares entre 100 e 200.

for($i=0; $i<200; $i++){
    if(is_float($i/2)){
        echo $i. "<br>";
    }
}

echo "<br>";

// 6. Faça uma página PHP que exiba os números pares entre 349 e 401.

for($i=349; $i<401 ;$i++){
    if(!is_float($i/2)){
        echo $i. "<br>";
    }
}

echo "<br>";

$multiplo = array("vermelho", "verde", 42 => "azul", "amarelo" => array("maçã", 9 => "pera", "banana", "laranja" => array("cão", "gato", "iguana")));

echo $multiplo["amarelo"]["laranja"][2];

?>