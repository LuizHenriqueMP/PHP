<?php

require_once __DIR__."\..\bd\mysql.php";

class Vaga{

    private int $idVaga;
    
    public function __construct(private string $descricao,private string $data_cad, private string $empresa, private bool $visivel){
    }

    

    public function save():bool{
        $conexao = new MySQL(); 
        if(isset($this->idVaga)){
            $sql = "UPDATE vagas SET visivel = '{$this->visivel}' WHERE id = {$this->idVaga}";
        }else{
            $sql = "INSERT INTO vagas (descricao, data_cad, empresa, visivel) VALUES ('{$this->descricao}','{$this->data_cad}','{$this->empresa}','{$this->visivel}')";
        }
        return $conexao->executa($sql);
    }

    public static function find($idVaga):Vaga{
        $conexao = new MySQL();
        $sql = "SELECT * FROM vagas WHERE id = {$idVagas}";
        $resultado = $conexao->consulta($sql);
        $u = new Vaga($resultado[0]['email'],$resultado[0]['senha']);
        $u->setIdUsuario($resultado[0]['id']);
        return $u;
    }
}
