<?php


# Função normal
function Mensagem(){
    echo "Tchau <br>";
}

# Função com variáveis
function Familia($nome){
    echo "$nome é minha tia. <br>";
}

# Função com valor default
function Familia2($nome = "Deisy"){
    echo "$nome é minha tia. <br>";
}

# Função alterando uma variável
$formiga = "Fu";
function Formiga(&$miga){
    $miga .= "miga";
}

# Função com um número de argumentos variáveis DEVE SER O ÚLTIMO ARGUMENTO
function Numeros(...$num){
    $a = 0;
    foreach($num as $x){
        $a +=$x;
    }
    echo "$a <br>";
}

Mensagem();
Familia("Lisi");
Familia2("Rosângela");
Familia2();
Formiga($formiga);
echo "$formiga <br>";
Numeros(1,2,3,4,5,6);
?>