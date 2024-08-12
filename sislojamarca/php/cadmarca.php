<?php 
session_start();
ini_set("display_errors", 1);

require_once "../controllers/marca/crudMarca.php";

if(isset($_POST["cadastrar"])){
    $idmarca = $_POST["IDMarca"] ?? "não informado";
    $nomefornecedor = $_POST["nomeFornecedor"] ?? "não informado";
    $emailfornecedor = $_POST["email"] ?? "não informado";
    $cpffornecedor = $_POST["cpf"] ?? "não informado";

    $nomemarca = $_POST["nomeMarca"] ?? "não informado";
    $detalhesproduto = $_POST["detalhesProduto"] ?? "não informado";
    $datacriacao = $_POST["dataCriacao"] ?? "não informado";
    $contato = $_POST["contato"] ?? "não informado";
    $endereco = $_POST["endereco"] ?? "não informado";

    $crud = new CrudProduto();
        
    $reponse = $crud->insert($cbarra, $titulo, $preco, $marca, $tipo, $detalhesproduto, $tamanhos, $idSuap_produto);

    echo $reponse;

    if($reponse == 1){
        echo "<script>alert('Cadastro realizado')</script>";
    } else {
        echo "<script>alert('Erro ao cadastrar!')</script>";
    }
}


?>


<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/cadmarca.css">
    <link rel="stylesheet" href="../css/responsive.css">
    <link rel="shortcut icon" href="../img/img2/iconshop1.png" type="image/x-icon">
    <title>Cadastro ESE</title>

</head>
<body>
    <header>
        <div class="header-cad">
        <h2>Cadastre sua Marca!!! </h2>
        <p>Insira seus Dados Abaixo </p><br><br>
        </div>
    </header>
   
    <main>
        <div class="cadastro">

                <div class="fornecedor">
                <form action="marcasparceiras.php" method="post">
                    <label for="IDMarca"><p>ID Marca</p></label>
                        <input type="text" name="IDMarca" id="IDMarca" required><br>

                    <label for="nomeFornecedor"><p>Nome Fornecedor</p></label>
                        <input type="text" name="nomeFornecedor" id="nomeFornecedor" required><br>

                    <label for="email"><p>Email</p></label>
                        <input type="email" name="email" id="email" required><br>

                    <label for="cpf"><p>CPF</p></label>
                        <input type="text" name="cpf" id="cpf" required><br><br><br>
                </div>

                <div class="suamarca">
                        <label for="nomeMarca"><p>Nome da Marca</p></label>
                            <input type="text" name="nomeMarca" id="nomeMarca" required><br>

                        <label for="detalhesProduto"><p>Descrição</p></label>
                            <input type="text" name="detalhesProduto" id="detalhesProduto"><br>

                        <label for="dataCriacao"><p>Criado na Data</p></label>
                            <input type="date" name="dataCriacao" id="dataCriacao"><br>

                        <label for="contato"><p>Contato</p></label>
                            <input type="text" name="contato" id="contato"><br>

                        <label for="endereco"><p>Endereco</p></label>
                            <input type="text" name="endereco" id="endereco"><br>
                </div>

                <input type="submit" value="Cadastrar"><br><br>

            </form>
        </div>
    </main>

    <footer>
        <div class="voltar">
            <a href="index.html">Voltar para a pagina Incial</a>
        </div>
    </footer>
</body>
</html>