<?php

$servername = "localhost";
$username = "root";
$password = "";

# Connects on the SQL server
$conn = mysqli_connect($servername, $username, $password);

# Check the connection
if(!$conn){
    die("Connection failed" . mysqli_connect_error());
}
echo "Connected successfully";

/*
# Creating the database
$sql = "CREATE DATABASE pokedex";
if($conn->query($sql) === TRUE){
    echo "<br>";
    echo "Database created successfully";
}else{
    echo "Error creating database: ".$conn->error;
}
*/



$conn->close();
?>