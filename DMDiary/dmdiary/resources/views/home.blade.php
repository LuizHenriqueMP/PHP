<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home</title>
    <link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}" >
</head>
<body>
    <section class="sidebar">
        <form action="/" method="POST">
            @csrf
            <?php

            $texto = json_decode(file_get_contents("C:/xampp/htdocs/PHP/DMDiary/dmdiary/storage/app/json_files/text.json"), true);
            $texto_exist = isset($texto['texto'][0]['titulo']);
            $indexSelect = 0;

            foreach($texto['texto'] as $x){
                if($x['titulo'] == $_POST['selecionado']){
                    $indexSelect = $x;
                }
            }
            
            if(isset($texto['texto'][0]['titulo'])){
                foreach($texto['texto'] as $x){
                    echo "<input type='submit' value={$x['titulo']} name='selecionado' >";
                }
            }
            $texto_selected = isset($_POST['selecionado']);
            ?>
        </form>
        
        <form action="/criar" method="post">
            @csrf

            <div>
                <input type="text" name="titulo" id="titulo" placeholder="Título">
            </div>
            <div>
                <input type="submit" name="criar" value="Criar">
            </div>
        </form>
    </section>
    <section class="main">
        <div>
        <?php
        $texto = json_decode(file_get_contents("C:/xampp/htdocs/PHP/DMDiary/dmdiary/storage/app/json_files/text.json"), true);
        
        if($texto_exist == true){
            foreach($texto['texto'] as $x){
                if($x['titulo'] == $_POST['selecionado'])
                    echo " <h1> {$x['titulo']} </h1>";
                    echo "<br>";
                    echo $x['descricao'];
                    echo "<hr>";
                    foreach ($x['aspectos'] as $y => $value) {
                        echo " <h2> {$value['subtitulo']} </h2>";
                        echo "<br>";
                        echo $value['subdescricao'];
                        echo "<hr>";
                    }
            }
        }else{
            echo "<h1>Bem vindo ao Diario do Mestre!!!</h1>";
        }
        

        ?>
        </div>
        <div>
            <form action="/escrever" method="POST">
                @csrf
                <?php

                if($texto_selected == true){
                    if($texto['texto'][0]['descricao'] == ""){
                        echo "
                        <div>
                            <input type='text' name='descricao' id='descricao' placeholder='Descrição'>
                        </div>
                        ";
                    }
                    echo "
                        <div>
                            <input type='text' name='subtitulo' id='subtitulo' placeholder='Subtítulo'>
                        </div>
                        <br>
                        <div>
                            <input type='text' name='subdescricao' id='subdescricao' placeholder='Descrição'>
                        </div>
                        <br>
                        <div>
                            <input type='submit' name='escrever' value='Escrever'>
                        </div>
                    ";
                }
                ?>
            </form>
        </div>
    </section>
</body>
</html>