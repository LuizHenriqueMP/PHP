<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function escrever(){
        // $texto = json_decode(file_get_contents("C:/xampp/htdocs/PHP/DMDiary/dmdiary/storage/app/json_files/text.json"), true);
        
        // if($texto['texto'][count($texto['texto']) - 1]['descricao'] == ""){
        //     $texto['texto'][count($texto['texto']) - 1] = ['titulo' => $texto['texto'][count($texto['texto']) - 1]['titulo'] ,
        //                                                     'descricao' => $_POST['descricao'], 
        //                                                     'aspectos'[count($texto['texto'][count($texto['texto']) - 1]['aspectos']) - 1] => 
        //                                                     ["subtitulo" => $_POST['subtitulo'], 
        //                                                     "subdescricao" => $_POST['subdescricao']]];
        // }else{
        //     $texto['texto'][count($texto['texto']) - 1]['aspectos'][count($texto['texto'][count($texto['texto']) - 1]['aspectos']) - 1] = 
        //                                                      array("subtitulo" => $_POST['subtitulo'], 
        //                                                    "subdescricao" => $_POST['subdescricao']);
        // }

        // file_put_contents("C:/xampp/htdocs/PHP/DMDiary/dmdiary/storage/app/json_files/text.json", json_encode($texto, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE));

        $filePath = storage_path("app/json_files/text.json");
        $texto = json_decode(file_get_contents($filePath), true);

        $indexSelect = 0;

        foreach($texto['texto'] as $x){
            if($x['titulo'] == $_POST['selecionado']){
                $indexSelect = $x;
            }
        }

        if ($texto['texto'][$indexSelect]['descricao'] == "") {
            // Atualiza descrição e cria primeiro aspecto
            $texto['texto'][$indexSelect]['descricao'] = $_POST['descricao'];
            $texto['texto'][$indexSelect]['aspectos'][] = [
                "subtitulo" => $_POST['subtitulo'],
                "subdescricao" => $_POST['subdescricao']
            ];
        } else {
            // Apenas adiciona novo aspecto
            $texto['texto'][$indexSelect]['aspectos'][] = [
                "subtitulo" => $_POST['subtitulo'],
                "subdescricao" => $_POST['subdescricao']
            ];
        }

        file_put_contents($filePath, json_encode($texto, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE));


        return redirect('/');
    }

    public function criar(){
        // $texto = json_decode(file_get_contents("C:/xampp/htdocs/PHP/DMDiary/dmdiary/storage/app/json_files/text.json"), true);

        // $texto['texto'][count($texto['texto']) - 1] = ['titulo' => $_POST['titulo'], 'descricao' => "", 
        //                                                 'aspectos' => 
        //                                                 array("subtitulo" => "", 
        //                                                 "subdescricao" => "")];

        // file_put_contents("C:/xampp/htdocs/PHP/DMDiary/dmdiary/storage/app/json_files/text.json", json_encode($texto, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE));

        $filePath = storage_path("app/json_files/text.json");
        $texto = json_decode(file_get_contents($filePath), true);

        $texto['texto'][] = [
            'titulo' => $_POST['titulo'],
            'descricao' => "",
            'aspectos' => []
        ];

        file_put_contents($filePath, json_encode($texto, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE));


        return redirect('/');
    }
}
