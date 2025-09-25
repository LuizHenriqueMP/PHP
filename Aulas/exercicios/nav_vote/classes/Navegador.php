<?php

require_once __DIR__."\..\bd\mysql.php";

class Navegador{

    private int $idNavegador;
    
    public function __construct(private string $nome, private string $url){
    }

    public function setId(int $idNavegador):void{
        $this->idNavegador = $idNavegador;
    }

    public function getId():int{
        return $this->idNavegador;
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

    public static function find($idNavegador):Navegador{
        $conexao = new MySQL();
        $sql = "SELECT * FROM navegadores WHERE id = {$idNavegador}";
        $resultado = $conexao->consulta($sql);
        $n = new Navegador($resultado[0]['nome'],$resultado[0]['url']);
        $n->setIdNavegador($resultado[0]['id']);
        return $n;
    }

    public static function findall():array{
        $conexao = new MySQL();
        $sql = "SELECT * FROM navegadores";
        $resultados = $conexao->consulta($sql);
        $navegadores = array();
        foreach($resultados as $resultado){
            $n = new Navegador($resultado['nome'],$resultado['url_foto']);
            $n->setId($resultado['id']);
            $navegadores[] = $n;
        }
        return $navegadores;
    }
}
