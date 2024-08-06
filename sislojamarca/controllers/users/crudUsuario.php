<?php 

require_once realpath(__DIR__ . "/usuario.php");

class CrudUsuario extends Usuario {
    protected string $tabela = "usuario";

    public function findOneById($id) {
        require_once realpath(__DIR__ . "/../../database/conexao.php");
        $result = $conn->query("SELECT * FROM $this->tabela WHERE idSuap = '$id'");
        return $result->fetch_assoc();
    }

    public function login($idsuap) {
        require_once realpath(__DIR__ . "/../../database/conexao.php");
        try {
            $data = $conn->query("SELECT IDSuap, senha FROM $this->tabela WHERE IDSuap = '$idsuap'")->fetch_all(MYSQLI_ASSOC);
        } catch (Exception $e) {
            $data = $e->getMessage();
        }
        
        return $data;
    }
    
    public function insert(string $idSuap, string $nome, string $cpf, string $senha, string $email, string $telefone) {
        require_once realpath(__DIR__ . "/../../database/conexao.php");
        $senha = hash("sha256", $senha);
        try {
            $data = $conn->query("INSERT INTO $this->tabela VALUES ('$idSuap', '$nome', '$email', '$senha', '$telefone', '$cpf')");
        } catch (Exception $e) {
            $data = $e->getMessage();
        }

        return $data;
    }
    
}