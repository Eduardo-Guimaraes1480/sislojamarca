<?php 

ini_set("display_errors",1);

require_once "../controllers/users/crudUsuario.php";

if(isset($_POST["entrar"])){
    $idsuap = $_POST["idsuap"];
    $senha = $_POST["senha"];

    $crud = new CrudUsuario();
        
    $reponse = $crud->login($idsuap);

    var_dump( $reponse );

    if($reponse[0]["IDSuap"]){
        if($reponse[0]["senha"] == hash("sha256", $senha)){
            session_start();
            $_SESSION["id"] = $reponse[0]["IDSuap"];
            header("Location: ./index.php");
        } else {
            echo "<script>alert('Senha Incorreta!')</script>";
        }
    } else {
        echo "<script>alert('Usuário não encontrado!')</script>";
    }

}

?>


<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/entrar.css">
    <link rel="stylesheet" href="../css/responsive.css">
    <link rel="shortcut icon" href="../img/img2/iconshop1.png" type="image/x-icon">
    <title>ESE Shop</title>

</head>

<body>

    <header>
        <h2>Seja Bem Vindo de Volta, </h2>
        <p>Insira seus Dados Abaixo </p>
    </header>

    <main>
        <form action="" method="post">

            <label for="idsuap">ID Suap</label>
            <input type="text" name="idsuap" id="idsuap">

            <label for="senha">Senha</label>
            <input type="password" name="senha" id="Senha">

            <input type="submit" value="Entrar" name="entrar">

        </form>
    </main>
</body>

</html>