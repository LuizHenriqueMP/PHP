<?php
$connection = new \mysqli("localhost", "root","","mrlui");
$connection->set_charset("utf8");
$sql = "select * from Festa";
$result = $connection->query($sql);
$item = array();
$data = array();
while($item = mysqli_fetch_array($result)){
    $data[] = $item;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table>
        <tr>
            <td>Nome</td>
            <td>Endereço</td>
            <td>Cidade</td>
            <td>Dia</td>
        </tr>
    </table>
    <?php
    foreach($data as $festa){
        echo "<tr>";
        echo "<td>{$festa['nome']}</td>";
        echo "<td>{$festa['endereco']}</td>";
        echo "<td>{$festa['cidade']}</td>";
        echo "<td>{$festa['dia']}</td>";
        echo "</tr>";
    }
    ?>
    <br>
    <a href='formFesta.php'>Adicionar Festa</a>
</body>
</html>