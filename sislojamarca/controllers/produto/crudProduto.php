<?php 

require_once realpath(__DIR__ ."/produto.php");

class CrudProduto extends Produto {

    protected string $tabela = "produto";

    public function insert ($cbarra, $titulo, $preco, $marca, $tipo, $detalhesproduto, $tamanhos, $IDSuap_produto) {
        require_once realpath(__DIR__ . "/../../database/conexao.php");
        try {
            $data = $conn->query("INSERT INTO $this->tabela VALUES ('$cbarra', '$titulo', '$preco', '$marca', '$tipo', '$detalhesproduto', '$tamanhos', '$IDSuap_produto')");
        } catch (Exception $e) {
            $data = $e->getMessage();
        }

        return $data;
    }
}