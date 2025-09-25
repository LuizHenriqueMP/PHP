<?php

require_once __DIR__."/classes/Usuario.php";

$usuario = new Usuario("admin@admin.com", 123);
$usuario->save();
?>