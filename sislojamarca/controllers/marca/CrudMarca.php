<?php 

function insertMarca ($nomeMarca, $descricao, $dataCriacao, $contato, $endereco, $IDFornecedor) {
    require realpath(__DIR__ . "/../../database/conexao.php");
    $sql = "INSERT INTO marca VALUES ('$nomeMarca', '$descricao', '$dataCriacao', '$contato', '$endereco', '$IDFornecedor')";
    $stm = $conn->prepare($sql);
    try {
        return $stm->execute();
    } catch (Exception $e) {
        return $e->getMessage();
    }
}

function findAllMarca() {
    require realpath(__DIR__ . "/../../database/conexao.php");
    $sql = "SELECT * FROM marca";
    $stm = $conn->prepare($sql);
    try {
        $stm->execute();
        return $stm->fetchAll();
    } catch (Exception $e) {
        return $e->getMessage();
    }
}

function findIdByNameMarca($nomeMarca) {
    require realpath(__DIR__ . "/../../database/conexao.php");
    $sql = "SELECT IDMarca FROM marca WHERE nomeMarca = '$nomeMarca'";
    $stm = $conn->prepare($sql);
    try {
        $stm->execute();
        return $stm->fetch();
    } catch (Exception $e) {
        return $e->getMessage();
    }
}
