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
        <h2>Para iniciar sua Conta, </h2>
        <p>Insira seus Dados Abaixo </p><br><br>
        </div>
    </header>
   
    <main>
        <div class="cadastro">
            
        <div class="part1">
            <form action="minhaconta.php" method="post">
                    
                    <label for="IDSuap"><p>ID Suap</p></label>
                        <input type="text" name="IDSuap" id="IDSuap" required>
                    
                    <label for="nome"><p>Nome</p></label>
                        <input type="text" name="nome" id="nome" required>
                        
                    <label for="email"><p>Email</p></label>
                        <input type="email" name="email" id="email" required>
        </div>
            
        <div class="part2">
                <label for="senha"><p>Senha</p></label>
                    <input type="password" name="senha" id="senha" required>

                <label for="telefone"><p>Telefone</p></label>
                    <input type="tel" name="telefone" id="telefone" >

                <label for="cpf"><p>CPF</p></label>
                    <input type="number" name="cpf" id="cpf" >

        </div>
                
                <input type="submit" value="Cadastrar"><br>

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