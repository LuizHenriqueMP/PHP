<?php

require_once __DIR__."\..\bd\MySQL.php";

class Voto{

    private int $idVoto;
    
    public function __construct(private int $idUsuario,private int $idNav){
    }

    public function setId(int $idVoto):void{
        $this->idVoto = $idVoto;
    }

    public function getIdVoto():int{
        return $this->idVoto;
    }

    public function setIdUsuario(int $idUsuario):void{
        $this->idUsuario = $idUsuario;
    }

    public function getIdUsuario():int{
        return $this->idUsuario;
    }

    public function setIdNav(int $idNav):void{
        $this->idNav = $idNav;
    }

    public function getIdNav():int{
        return $this->idNav;
    }

    public static function Votou():bool{
        $conexao = new MySQL();
        $sql = "SELECT idUsuario FROM votos WHERE idUsuario = '{$_SESSION['idUsuario']}'";
        $resultado = $conexao->consulta($sql);
        if($resultado[0]['idUsuario'] == $_SESSION['idUsuario']){
            return true;
        }else{
            return false;
        }
    }

    public function save():bool{
        $conexao = new MySQL();
        $sql = "INSERT INTO votos (idUsuario,idNav) VALUES ('{$this->idUsuario}','{$this->idNav}')";
        return $conexao->executa($sql);
    }

    public static function findall():array{
        $conexao = new MySQL();
        $sql = "SELECT * FROM votos";
        $resultados = $conexao->consulta($sql);
        $votos = array();
        foreach($resultados as $resultado){
            $v = new Voto($resultado['idUsuario'],$resultado['idNav']);
            $v->setId($resultado['idVoto']);
            $votos[] = $v;
        }
        return $votos;
    }
}