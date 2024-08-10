<?php

function findOneById($id)
{
    require realpath(__DIR__ . "/../../database/conexao.php");
    $sql = "SELECT * FROM usuario WHERE idSuap = '$id'";
    $stm = $conn->prepare($sql);
    try {
        $stm->execute();
        return $stm->fetch();
    } catch (PDOException $e) {
        return $e->getMessage();
    }
}

function login($idsuap)
{
    require realpath(__DIR__ . "/../../database/conexao.php");
    $sql = "SELECT IDSuap, senha FROM usuario WHERE IDSuap = :idsuap";
    $stm = $conn->prepare($sql);
    $stm->bindParam(":idsuap", $idsuap);
    try {
        $stm->execute();
        return $stm->fetch();
    } catch (PDOException $e) {
        return $e->getMessage();
    }
}

function insert(string $idSuap, string $nome, string $cpf, string $senha, string $email, string $telefone)
{
    require realpath(__DIR__ . "/../../database/conexao.php");
    $senha = hash("sha256", $senha);
    $sql = "INSERT INTO usuario VALUES ('$idSuap', '$nome', '$email', '$senha', '$telefone', '$cpf')";
    $stm = $conn->prepare($sql);
    try {
        $stm->execute();
        return $stm->fetch();
    } catch (PDOException $e) {
        return $e->getMessage();
    }
}
