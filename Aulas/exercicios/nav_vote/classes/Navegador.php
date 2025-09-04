<?php

require_once __DIR__."\..\bd\mysql.php";

class Navegador{

    private int $idNavegador;
    
    public function __construct(private string $nome, private string $url, private int $votos){
    }

    public function getNome():string{
        return $this->nome;
    }

    public function getIdNavegador():int{
        return $this->idNavegador;
    }

    public function getURL():string{
        return $this->url;
    }

    public function setVotos(int $votos):void{
        $this->votos = $votos;
    }

    public function getVotos():int{
        return $this->votos;
    }

    public static function find($idNavegador):Navegador{
        $conexao = new MySQL();
        $sql = "SELECT * FROM navegadores WHERE id = {$idNavegador}";
        $resultado = $conexao->consulta($sql);
        $n = new Navegador($resultado[0]['nome'],$resultado[0]['url'],$resultado[0]['votos']);
        $n->setIdNavegador($resultado[0]['id']);
        return $n;
    }
}
