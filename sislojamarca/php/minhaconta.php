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
        <div class="imglogo">
            <a href="../php/index.html"><img src="../img/img2/logoshop1.png" alt="Teste" class="d-block"
                    style="width: 100%"></a>
        </div>

        <h2>minhaconta.php</h2>

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
        <div class="main1">
            <h2>minhaconta.php</h2>
        </div> 
    </main>

    <main>
        <div class="imguser">
            <a href="../php/minhaconta.php"><img class="user" src="../img/user.png" style="width: 100%"></a>
        </div>

        <?php echo $_POST ['IDSuap'] ??'';?>
        <?php echo $_POST ['nome'] ??'';?>
        <?php echo $_POST ['email'] ??'';?>
        <?php echo $_POST ['senha'] ??'';?>
        <?php echo $_POST ['telefone'] ??'';?>
        <?php echo $_POST ['cpf'] ??'';?>

        <div class="MaisCadastros">
            <div class="cadproduto">
                <br><br><p><a href="cadproduto.php">Cadastrar Novo Produto</a></p>
            </div>

            <div class="cadmarca">
                <br><br><p><a href="cadmarca.php">Cadastrar Marca</a></p>
            </div>
        </div>
        

    </main>
    
</body>
</html>