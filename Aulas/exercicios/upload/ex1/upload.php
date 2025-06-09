<?php

$diretorio = "arquivos/";
$nome_arquivo = $_FILES['arquivo']['name'];

$info_name = explode(".", $nome_arquivo);
$ext = end($info_name);

if(move_uploaded_file($_FILES['arquivo']['tmp_name'], $diretorio.uniqid().".".$ext)){
    echo "Upload feito com sucesso.";
}else{
    echo "Falha no upload do arquivo";  
}

?>