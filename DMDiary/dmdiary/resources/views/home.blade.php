<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home</title>
    <link rel="stylesheet" href="C:\xampp\htdocs\PHP\DMDiary\dmdiary\resources\css\style.css">
</head>
<body>
    <section class="sidebar">
        <?php
        $texto = json_decode(file_get_contents("C:/xampp/htdocs/PHP/DMDiary/dmdiary/storage/app/json_files/text.json"), true);

        foreach($texto['texto'] as $x){
            echo $x['titulo'];
        }

        ?>
    </section>
    <section>
        <div>
        <?php
        $texto = json_decode(file_get_contents("C:/xampp/htdocs/PHP/DMDiary/dmdiary/storage/app/json_files/text.json"), true);

        foreach($texto['texto'] as $x){
            echo " <h1> {$x['titulo']} </h1>";
            echo "<br>";
            echo $x['descricao'];
            echo "<hr>";
        }

        ?>
        </div>
        <div style="border: 3px solid black;">
            <form action="/escrever" method="POST">
                @csrf
                <div>
                    <input type="text" name="titulo" id="titulo" placeholder="título">
                </div>
                <br>
                <div>
                    <input type="text" name="descricao" id="descricao" placeholder="descrição">
                </div>
                <div>
                    <input type="submit" name="escrever" value="Escrever">
                </div>
            </form>
        </div>
    </section>
</body>
</html>