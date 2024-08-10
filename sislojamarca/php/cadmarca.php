<?php 
session_start();
ini_set("display_errors", 1);

require_once "../controllers/marca/crudMarca.php";
require_once "../controllers/fornecedor/crudFornecedor.php";

if(isset($_POST["cadastrar"])){
    $fornecedor = $_POST["fornecedor"] ?? "não informado";
    $nomemarca = $_POST["nomeMarca"] ?? "não informado";
    $descricao = $_POST["descricao"] ?? "não informado";
    $datacriacao = $_POST["dataCriacao"] ?? "não informado";
    $contato = $_POST["contato"] ?? "não informado";
    $endereco = $_POST["endereco"] ?? "não informado";

    $fornecedor = findIdByNameFornecedor($fornecedor)["IDFornecedor"];

    try {
        $reponse = insertMarca($nomemarca, $descricao, $datacriacao, $contato, $endereco, $fornecedor);
    } catch (PDOException $e) {
        echo "<script> window.alert('Erro ao cadastrar: '" . $e->getMessage() . ")</script>";
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
                <form action="" method="post">
                    <label for="fornecedor"><p>Fornecedor</p></label>
                        <select id="fornecedor" name="fornecedor">
                            <option value="Bruno">Bruno</option>
                            <option value="NA">NA</option>
                        </select><br>
                </div>

                <div class="suamarca">
                        <label for="nomeMarca"><p>Nome da Marca</p></label>
                            <input type="text" name="nomeMarca" id="nomeMarca" required><br>

                        <label for="descricao"><p>Descrição</p></label>
                            <input type="text" name="descricao" id="descricao"><br>

                        <label for="dataCriacao"><p>Criado na Data</p></label>
                            <input type="date" name="dataCriacao" id="dataCriacao"><br>

                        <label for="contato"><p>Contato</p></label>
                            <input type="text" name="contato" id="contato"><br>

                        <label for="endereco"><p>Endereco</p></label>
                            <input type="text" name="endereco" id="endereco"><br>
                </div>

                <input type="submit" value="Cadastrar" name="cadastrar"><br><br>

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