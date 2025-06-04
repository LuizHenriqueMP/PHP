<?php

if($_POST['user'] == "luiz" && $_POST['password'] == "123"){
    session_start();
    $_SESSION['status'] = 1;
    header("Location: homepage.php");
}

?>