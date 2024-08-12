<?php 

require_once realpath(__DIR__ ."/marca.php");
class CrudMarca extends Marca {

    protected string $tabela = "marca";

    public function insert ($nomeMarca, $descricao, $dataCriacao, $contato, $endereco, $IDFornecedor) {
        require_once realpath(__DIR__ . "/../../database/conexao.php");
        try {
            $data = $conn->query("INSERT INTO $this->tabela VALUES ('$nomeMarca', '$descricao', '$dataCriacao', '$contato', '$endereco', '$IDFornecedor')");
        } catch (Exception $e) {
            $data = $e->getMessage();
        }

        return $data;
    }

    public function findAll() {
        require_once realpath(__DIR__ . "/../../database/conexao.php");
        try{
            $data = $conn->query("SELECT * FROM $this->tabela")->fetch_all(MYSQLI_ASSOC);
        } catch (Exception $e) {
            $data = $e->getMessage();
        }
        
        return $data;
    }
}