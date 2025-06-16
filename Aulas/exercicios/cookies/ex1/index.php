<?php
if(isset($_POST['button'])){
    setcookie("cor", $_POST['button'], time()+3600);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<?php
    if(isset($_COOKIE['cor'])){
        echo "<style> body{ background-color: {$_COOKIE['cor']}; </style>"; 
    }else{
        echo "<style> body{ background-color: white; </style>";
    }
?>
<body>
    <form method="post" action="index.php">
        <h1>Escolha a cor da página</h1>

        <input type="submit" name="button" value="blue">
        <input type="submit" name="button" value="black">
    </form>    
</body>
</html>