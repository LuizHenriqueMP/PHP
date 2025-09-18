<?php

require_once __DIR__."\..\bd\mysql.php";

class Vaga{

    private int $idVaga;
    
    public function __construct(private string $descricao,private string $data_cad, private string $empresa, private int $visivel){
    }

    public function setId(int $idVaga):void{
        $this->idVaga = $idVaga;
    }
    public function getId():int{
        return $this->idVaga;
    }

    public function setData(string $data_cad):void{
        $this->data_cad = $data_cad;
    }
    public function getData():string{
        return $this->data_cad;
    }

    public function setVisivel(int $visivel):void{
        $this->visivel = $visivel;
    }
    public function getVisivel():int{
        return $this->visivel;
    }

    public function setDescricao(string $descricao):void{
        $this->descricao = $descricao;
    }
    public function getDescricao():string{
        return $this->descricao;
    }

    public function setEmpresa(string $empresa):void{
        $this->empresa = $empresa;
    }
    public function getEmpresa():string{
        return $this->empresa;
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
        $u = new Vaga($resultado[0]['descricao'],$resultado[0]['data_cad'],$resultado[0]['empresa'],$resultado[0]['visivel']);
        $u->setId($resultado[0]['id']);
        return $u;
    }
    public static function findall():array{
        $conexao = new MySQL();
        $sql = "SELECT * FROM vagas";
        $resultados = $conexao->consulta($sql);
        $vagas = array();
        foreach($resultados as $resultado){
            $v = new Vaga($resultado['descricao'],$resultado['data_cad'], $resultado['empresa'], $resultado['visivel']);
            $v->setId($resultado['id']);
            $vagas[] = $v;
        }
        return $vagas;
    }
}
