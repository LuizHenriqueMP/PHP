<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "pokedex";

# Connects on the SQL server
$conn = mysqli_connect($servername, $username, $password, $dbname);

# Check the connection
if(!$conn){
    die("Connection failed" . mysqli_connect_error());
}
echo "Connected successfully";

/*
CRIAÇÃO DO DATABASE

# Creating the database
$sql = "CREATE DATABASE pokedex";
if($conn->query($sql) === TRUE){
    echo "<br>";
    echo "Database created successfully";
}else{
    echo "Error creating database: ".$conn->error;
}

//CRIAÇÃO DA TABELA POKEMON

$sql = "
CREATE TABLE pokemon(
id INT AUTO_INCREMENT PRIMARY KEY,
num INT(11),
name VARCHAR(30),
imgurl VARCHAR(100),
type1 VARCHAR(30),
type2 VARCHAR(30)
)";

if($conn->query($sql) === TRUE){
    echo "<br>";
    echo "Database created successfully";
}else{
    echo "Error creating database: ".$conn->error;
}

$id = 0;
$num = 0;
$name = "";
$imgurl = "";
$type1 = "";
$type2 = "";

//PASSAR O JSON PARA UM DATABASE SQL

$pokedexkanto = json_decode(file_get_contents("json/pokedex.json"), true);

foreach($pokedexkanto["pokemons"] as $x){
    $id = (int) $x["id"];
    $num = (int) $x["num"];
    $name = $x["name"];
    $imgurl = $x["img"];
    $type1 = $x["type"][0];
    if(isset($x["type"][1])){
        $type2 = $x["type"][1];
    }else{
        $type2 = "Nenhum";
    }
    
    $sql = "INSERT INTO pokemon(id, num, name, imgurl, type1, type2) VALUES ($id, $num, '$name', '$imgurl', '$type1', '$type2')";

    if($conn->query($sql) === TRUE){
        echo "<br>";
        echo "$name added successfully!";
    }else{
        echo "Error receiving the command: ".$conn->error;
    }
}
*/

$conn->close();
?>