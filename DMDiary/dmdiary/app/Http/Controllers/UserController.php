<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function escrever(){
        $texto = json_decode(file_get_contents("C:/xampp/htdocs/PHP/DMDiary/dmdiary/storage/app/json_files/text.json"), true);
        
        $texto['texto'][count($texto['texto']) - 1] = array('titulo' => $_POST['titulo'], 'descricao' => $_POST['descricao']);

        file_put_contents("C:/xampp/htdocs/PHP/DMDiary/dmdiary/storage/app/json_files/text.json", json_encode($texto, JSON_PRETTY_PRINT));

        return redirect('/');
    }
}
