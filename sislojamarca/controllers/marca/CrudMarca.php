<?php 

require_once realpath(__DIR__ ."/marca.php");
class CrudMarca extends Marca {

    protected string $tabela = "marca";

    public function insert ($nomeMarca, $descricao, $dataCriacao, $contato, $endereco, $IDFornecedor) {
        require_once realpath(__DIR__ . "/../../database/conexao.php");
        $sql = "INSERT INTO $this->tabela VALUES ('$nomeMarca', '$descricao', '$dataCriacao', '$contato', '$endereco', '$IDFornecedor')";
        $stm = Database::prepare($sql);
        try {
            return $stm->execute();
        } catch (Exception $e) {
            return $e->getMessage();
        }
    }

    public function findAll() {
        require_once realpath(__DIR__ . "/../../database/conexao.php");
        $sql = "SELECT * FROM $this->tabela";
        $stm = Database::prepare($sql);
        try {
            $stm->execute();
            return $stm->fetchAll();
        } catch (Exception $e) {
            return $e->getMessage();
        }
    }
}