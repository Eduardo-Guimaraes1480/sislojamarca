<?php 

function insertProduto ($cbarra, $titulo, $preco, $marca, $tipo, $detalhesproduto, $tamanhos, $IDSuap_produto) {
    require realpath(__DIR__ . "/../../database/conexao.php");
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
    require realpath(__DIR__ . "/../../database/conexao.php");
    $sql = "SELECT * FROM produto";
    $stm = $conn->prepare($sql);
    try {
        $stm->execute();
        return $stm->fetchAll();
    } catch (PDOException $e) {
        return $e->getMessage();
    }
}

function updateProduto($cbarra, $titulo, $preco, $marca, $tipo, $detalhesproduto, $tamanhos) {
    require realpath(__DIR__ . "/../../database/conexao.php");
    $sql = "UPDATE produto SET titulo = '$titulo', preco = '$preco', marca = '$marca', tipo = '$tipo', detalhesProduto = '$detalhesproduto', tamanhos = '$tamanhos' WHERE CBarra = '$cbarra'";
    $stm = $conn->prepare($sql);
    try {
        $stm->execute();
        return $stm->fetch();
    } catch (PDOException $e) {
        return $e->getMessage();
    }
}

function findProdutoByCBarra($cbarra) {
    require realpath(__DIR__ . "/../../database/conexao.php");
    $sql = "SELECT * FROM produto WHERE CBarra = '$cbarra'";
    $stm = $conn->prepare($sql);
    try {
        $stm->execute();
        return $stm->fetch();
    } catch (PDOException $e) {
        return $e->getMessage();
    }
}

function deleteProduto($cbarra) {
    require realpath(__DIR__ . "/../../database/conexao.php");
    $sql = "DELETE FROM produto WHERE CBarra = '$cbarra'";
    $stm = $conn->prepare($sql);
    try {
        $stm->execute();
        return $stm->fetch();
    } catch (PDOException $e) {
        return $e->getMessage();
    }
}