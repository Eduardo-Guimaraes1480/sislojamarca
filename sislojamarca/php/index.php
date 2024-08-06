<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/index.css">
    <link rel="stylesheet" href="../css/responsive.css">
    <link rel="shortcut icon" href="../img/img2/iconshop1.png" type="image/x-icon">
    <title>ESE Shop</title>

</head>
<body>

    <?php include_once "../components/header.php"?>

    <div class="main1">
        <section>
            <img src="../img/img2.png" alt="Teste" class="d-block" style="width: 100%">
        </section>

        <div class="areablack">
            <?php 
            if (!isset($_SESSION["id"])) {
                echo "
                <h3><a href='cadastro.php'>Cadastrar</a></h3>
                <p><a href='entrar.php'>Entrar</a></p>";
            } else {
                echo "
                <h3><a href='altproduto.php'>Alterar Produto</a></h3>
                <p><a href='logout.php'>Sair</a></p>";
            }
            ?>
        </div>
    </div>


    <div class="mainback">
        <main>
            <div class="produtos">
                <h1>Produtos em Destaque:</h1>
            </div>

            <div class="teste">
                <p>ESE Shop - Loja Marca</p>
            </div>

        </main>
    </div>

    <footer>
        <div class="names">
            <div class="1">
                <br><br><h2>Desenvolvedores:</h2>
                <a href="https://github.com/Eduardo-Guimaraes1480"  target="_blank"><p>Eduardo Guimarães</p></a><br>
                <a href="https://www.instagram.com/gabrielnestor17/"  target="_blank"><p>Gabriel Nestor</p></a><br>
                <a href="https://github.com/yasminschultz"  target="_blank"><p>Yasmin Schultz</p></a>
            </div>
        </div>
        <div class="names">
            <div class="2">
                <h2>Contatos:</h2>
                <p>Numero de telefone: +55 (77)98141-4031</p><br>
                <p>E-mail: eseguanambiese@gmail.com</p>
            </div>
        </div>
        <div class="names">
            <br><br><h2>Redes Sociais:</h2>
            <p><a href="https://github.com/TheGrandAristocrat" target="_blank">Github: The Grand Aristocrat</a></p><br>
            <p><a href="https://www.instagram.com/ese_equipeoficial/" target="_blank">Instagram: @ese_equipeoficial</a></p><br>
            <p>Twitter: Não disponível</p>
        </div>

    </footer>

    <footer>
        <div class="copyright">
            <p>Copyright &copy; 2024 - Todos os direitos reservados</p>
        </div>
    </footer>
</body>

</html>