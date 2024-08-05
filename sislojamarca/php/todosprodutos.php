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

    <header>

        <div class="imglogo">
            <a href="../php/index.html"><img src="../img/img2/logoshop1.png" alt="Teste" class="d-block"
                    style="width: 100%"></a>
        </div>

        <h2>todosprodutos.php</h2>

        <div class="imguser">
            <a href="../php/minhaconta.php"><img class="user" src="../img/img2/perfil.png" style="width: 100%"></a>
        </div>
        
    </header>

    <nav>
        <ul>
            <li class="nav-item">
                <a href="todosprodutos.php">Todos os Produtos</a>
            </li>
            <li class="nav-item">
                <a href="marcasparceiras.php">Marcas Parceiras</a>
            </li>
            <li class="nav-item">
                <a href="medidas.html">Medidas</a>
            </li>
            <li class="nav-item">
                <a href="sobre.html">Sobre Nós</a>
            </li>
        </ul>
    </nav>

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
            <a href="index.html">Voltar para a pagina Incial</a>
        </div>
    </main>

</body>
</html>