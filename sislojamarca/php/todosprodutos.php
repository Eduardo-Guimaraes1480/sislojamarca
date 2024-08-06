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

    <?php include_once "../components/header.php"?>

    <main>
        <h2>todosprodutos.php</h2>

        <?php echo $_POST ['CBarra'] ??'';?>
        <?php echo $_POST ['titulo'] ??'';?>
        <?php echo $_POST ['preco'] ??'';?>
        <?php echo $_POST ['marca'] ??'';?>
        <?php echo $_POST ['tipo'] ??'';?>
        <?php echo $_POST ['detalhesProduto'] ??'';?>
        <?php echo $_POST ['tamanhos'] ??'';?>

        <div class="voltar">
            <a href="./index.php">Voltar para a pagina Incial</a>
        </div>
    </main>

</body>
</html>