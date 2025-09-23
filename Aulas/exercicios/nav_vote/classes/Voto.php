<?php

require_once __DIR__."\..\bd\MySQL.php";

class Voto{

    private int $idVoto;
    
    public function __construct(private int $idUsuario,private int $idNav){
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
        $this->senha = password_hash($this->senha,PASSWORD_BCRYPT); 
        $sql = "INSERT INTO votos (idUsuario,idNav) VALUES ('{$this->idUsuario}','{$this->idNav}')";
        return $conexao->executa($sql);
    }
}