<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="upload.php" method="post" enctype="multipart/form-data">
        <label id="arquivo">Arquivo:</label>

        <input type="file" name="arquivo" id="arquivo" multiple>
        <input type="submit" id="button" name="button" value="Enviar">

        <button id="galeria" name="galeria" value="1">Galeria</button>
    </form>
</body>
</html>

<?php

if(isset($_POST['galeria'])){
    if($_POST['galeria']==1){
        header("Location: gallery.html");
    }
}


if(isset($_FILES['arquivo'])){
    $diretorio = "arquivos/";   
    $nome_arquivo = $_FILES['arquivo']['name'];
    $info_name = explode(".", $nome_arquivo);
    $ext = end($info_name);

    move_uploaded_file($_FILES['arquivo']['tmp_name'], $diretorio.uniqid().".".$ext);
}

?>