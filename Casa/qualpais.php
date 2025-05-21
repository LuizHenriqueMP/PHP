<?php

$pais = rand(1, 6);

if($pais === 1){
    echo "Europeia";
}else if($pais === 2){
    echo "Latina";
}else if($pais === 3){
    echo "Asiática";
}else if($pais === 4){
    echo "Africana";    
}else if($pais === 5){
    echo "Oceania";
}
else{
    echo "Norte americana";
}

?>