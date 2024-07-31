<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/psw1/sislojamarca/css/minhaconta.css">
    <link rel="stylesheet" href="/psw1/sislojamarca/css/style.css">
    <link rel="stylesheet" href="/psw1/sislojamarca/css/responsive.css">
    <link rel="shortcut icon" href="../img/img2/iconshop1.png" type="image/x-icon">
    <title>ESE Shop</title>

</head>
<body>
    <header>
        <h2>minhaconta.php</h2>
    </header>

    <nav>
        <ul>
            <li class="nav-item">
                <a href="todosprodutos.php">Todos os Produtos</a>
            </li>
            <li class="nav-item">
                <a href="medidas.html">Medidas</a>
            </li>
            <li class="nav-item">
                <a href="sobre.html">Sobre</a>
            </li>
        </ul>
    </nav>

    <main>
        <h2>minhaconta.php</h2>
    </main>

    <main>
        <div class="imguser">
            <a href="../php/minhaconta.php"><img class="user" src="../img/user.png" style="width: 40%"></a>
        </div>

        <?php echo $_POST ['nome'];?>
        <?php echo $_POST ['email'];?>
        <?php echo $_POST ['senha'];?>
        <?php echo $_POST ['telefone'];?>
        <?php echo $_POST ['cpf'];?>

        <div class="cadastroproduto">
            <br><br><p><a href="cadastroproduto.php">Cadastrar Novo Produto</a></p>
        </div>

        <div class="voltar">
            <a href="index.html">Voltar para a pagina Incial</a>
        </div>

    </main>
    
</body>
</html>