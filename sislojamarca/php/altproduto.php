<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/cadastro.css">
    <link rel="stylesheet" href="../css/responsive.css">
    <link rel="shortcut icon" href="../img/img2/iconshop1.png" type="image/x-icon">
    <title>Alterar Produto</title>

</head>
<body>
    <header>
        <div class="header-cad">
        <h2>Altere seu Produto!!! </h2>
        <p>Insira seus Dados Abaixo </p><br><br>
        </div>
    </header>
   
    <main>
        <div class="cadastro">
            <form action="todosprodutos.php" method="post">

            <label for="Cbarra"><p>C. Barra</p></label>
                    <input type="text" name="Cbarra" id="Cbarra" value="<?php echo $CBarra ?>" required><br>

                <label for="titulo"><p>Titulo</p></label>
                    <input type="text" name="titulo" id="titulo" value="<?php echo $titulo ?>" required><br>

                <label for="preco"><p>Preço</p></label>
                    <input type="number" name="preco" id="preco" value="<?php echo $preco ?>" required><br>

                <label for="marcas"><p>Marcas</p></label>
                    <select id="marcas" name="marcas">
                        <option value="ESE">ESE</option>
                        <option value="LAB">LABORATORIA</option>
                        <option value="NE">NOVA ERA</option>
                    </select><br>

                <label for="tipo"><p>Tipos</p></label>
                    <select id="tipo" name="tipo">
                        <option value="C">Camisa</option>
                        <option value="M">Moletom</option>
                        <option value="R">Regata</option>
                    </select><br>

                <label for="detalhesProduto"><p>Detalhes do Produto</p></label>
                    <input type="tel" name="detalhesProduto" id="detalhesProduto" value="<?php echo $detalhesProduto ?>"><br>

                <label for="tamanhos"><p>Tamanhos</p></label>
                    <select id="tamanhos" name="tamanhos">
                        <option value="P">P</option>
                        <option value="M">M</option>
                        <option value="G">G</option>
                        <option value="GG">GG</option>
                    </select><br>

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