<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/marcasparceiras.css">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/responsive.css">
    <link rel="shortcut icon" href="../img/img2/iconshop1.png" type="image/x-icon">
    <title>ESE Shop</title>

</head>
<body>

    <?php include_once "../components/header.php"?>

    <main>
        <h2>marcasparceiras.php</h2>

        <?php echo $_POST ['IDMarca'] ??'';?>
        <?php echo $_POST ['nomeFornecedor'] ??'';?>
        <?php echo $_POST ['email'] ??'';?>
        <?php echo $_POST ['cpf'] ??'';?>
        <?php echo $_POST ['descricao'] ??'';?>
        <?php echo $_POST ['dataCriacao'] ??'';?>
        <?php echo $_POST ['contato'] ??'';?>
        <?php echo $_POST ['endereco'] ??'';?>

        <div class="voltar">
            <a href="./index.php">Voltar para a pagina Incial</a>
        </div>
    </main>

</body>
</html>