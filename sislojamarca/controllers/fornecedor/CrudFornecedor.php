<?php 

require realpath(__DIR__ ."/fornecedor.php");
class CrudForncedor extends Fornecedor {

    protected string $tabela = "fornecedor";

    public function insert ($nomeFornecedor, $email, $cpf, $cnpj) {
        require realpath(__DIR__ . "/../../database/conexao.php");
        try {
            $data = $conn->query("INSERT INTO $this->tabela VALUES ('$nomeFornecedor', '$email', '$cpf', '$cnpj')");
        } catch (Exception $e) {
            $data = $e->getMessage();
        }

        return $data;
    }

    public function findAll() {
        require realpath(__DIR__ . "/../../database/conexao.php");
        try{
            $data = $conn->query("SELECT * FROM $this->tabela")->fetch_all(MYSQLI_ASSOC);
        } catch (Exception $e) {
            $data = $e->getMessage();
        }
        
        return $data;
    }
}