<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/todosprodutos.css">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/responsive.css">
    <link rel="shortcut icon" href="../img/img2/iconshop1.png" type="image/x-icon">
    <title>ESE Shop</title>

</head>
<body>

    <?php 
    ini_set("display_errors", 1);
    
    include_once "../components/header.php"?>

    <main>
        <h2>Produtos</h2>

        <div class="produtos">

        
        <?php 
        require realpath(__DIR__ . "/../controllers/produto/crudProduto.php");

        $data = findAllProduto();

        for($i = 0; $i < 5; $i++){
            
            foreach ($data as $produto) {?>

            <div class="produto">
                <div class="imagem">
                    <img src="../img/laboratoria/<?= $produto["CBarra"] ?>.PNG" alt="Imagem do Produto">
                </div>
                <div class="info">
                    <h3 class="desc-prod"><?= $produto["titulo"]?></h3>
                    <div>
                        <span>R$<?= str_replace(".", ",", $produto["preco"])?></span>
                        <button><i class="fa-solid fa-cart-shopping"></i></button>
                    </div>
                </div>
            </div>

        <?php }}?>

        </div>
        <div class="voltar">
            <a href="./index.php">Voltar para a pagina Incial</a>
        </div>
    </main>

    <script src="../js/truncate.js"></script>
    <script src="https://kit.fontawesome.com/19ad99d8f1.js" crossorigin="anonymous"></script>
</body>
</html> 