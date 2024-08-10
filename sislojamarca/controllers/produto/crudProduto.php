<?php 

function insertProduto ($cbarra, $titulo, $preco, $marca, $tipo, $detalhesproduto, $tamanhos, $IDSuap_produto) {
    require_once realpath(__DIR__ . "/../../database/conexao.php");
    $sql = "INSERT INTO produto VALUES ('$cbarra', '$titulo', '$preco', '$marca', '$tipo', '$detalhesproduto', '$tamanhos', '$IDSuap_produto')";
    $stm = $conn->prepare($sql);
    try {
        $stm->execute();
        return $stm->fetch();
    } catch (PDOException $e) {
        return $e->getMessage();
    }
}

function findAllProduto() {
    require_once realpath(__DIR__ . "/../../database/conexao.php");
    $sql = "SELECT * FROM produto";
    $stm = $conn->prepare($sql);
    try {
        $stm->execute();
        return $stm->fetchAll();
    } catch (PDOException $e) {
        return $e->getMessage();
    }
}
