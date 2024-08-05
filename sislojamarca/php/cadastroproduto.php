<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/cadastro.css">
    <link rel="stylesheet" href="../css/responsive.css">
    <link rel="shortcut icon" href="../img/img2/iconshop1.png" type="image/x-icon">
    <title>Cadastro ESE</title>

</head>
<body>
    <header>
        <div class="header-cad">
        <h2>Cadastre seu Produto, </h2>
        <p>Insira seus Dados Abaixo </p><br><br>
        </div>
    </header>
   
    <main>
        <div class="cadastro">
            <form action="todosprodutos.php" method="post">
                <label for="nome"><p>Nome</p></label>
                <input type="text" name="nome" id="nome" required><br>
                <label for="preco"><p>Preço</p></label>
                <input type="number" name="preco" id="preco" required><br>
                <label for="marcas"><p>Marcas</p></label>
                <select id="marcas" name="marcas">
                <option value="RN">ESE</option>
                <option value="AL">LABORATORIA</option>
                <option value="AP">NOVA ERA</option>
                </select><br>
                <label for="descricao"><p>Descrição</p></label>
                <input type="tel" name="descricao" id="descricao" ><br>
                <label for="img"><p>Imagem</p></label>
                <input type="text" name="img" id="img" ><br>
                <input type="submit" value="Cadastrar"><br><br>
            </form>
        </div>
    </main>

    <footer>
        <div class="cad-enviar">
            <a href="index.html">Voltar para a pagina Incial</a>
        </div>
    </footer>
</body>
</html>