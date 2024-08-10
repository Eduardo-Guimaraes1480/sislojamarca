<?php

function insert($nomeFornecedor, $email, $cpf, $cnpj)
{
    require realpath(__DIR__ . "/../../database/conexao.php");
    try {
        $data = $conn->query("INSERT INTO fornecedor VALUES ('$nomeFornecedor', '$email', '$cpf', '$cnpj')");
    } catch (Exception $e) {
        $data = $e->getMessage();
    }

    return $data;
}

function findAll()
{
    require realpath(__DIR__ . "/../../database/conexao.php");
    try {
        $data = $conn->query("SELECT * FROM fornecedor")->fetch_all(MYSQLI_ASSOC);
    } catch (Exception $e) {
        $data = $e->getMessage();
    }

    return $data;
}

function findIdByNameFornecedor($nome){
    require realpath(__DIR__ . "/../../database/conexao.php");
    $sql = "SELECT IDFornecedor FROM fornecedor WHERE nomeFornecedor = :nome";
    $stm = $conn->prepare($sql);
    $stm->bindParam(":nome", $nome);
    try {
        $stm->execute();
        return $stm->fetch();
    } catch (Exception $e) {
        return $e->getMessage();
    }
}
