<?php

session_start();

if(!isset($_SESSION['status'])){
    header("Location: index.html");
    exit;
} else {
    echo "Session is set: " . $_SESSION['status'];
}

?>