<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/minhaconta.css">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/responsive.css">
    <link rel="shortcut icon" href="../img/img2/iconshop1.png" type="image/x-icon">
    <title>ESE Shop</title>

</head>
<body>

    <?php include_once "../components/header.php"?>

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
                <br><br><p><a href="./cadproduto.php">Cadastrar Novo Produto</a></p>
            </div>

            <div class="cadmarca">
                <br><br><p><a href="./cadmarca.php">Cadastrar Marca</a></p>
            </div>
        </div>
        

    </main>
    
</body>
</html>