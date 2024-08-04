<?php
$localhost = 'localhost';
$user = 'root';
$pass = '';
$dbname = 'sislojamarca';

// Criar a conexão com o BD usando o PDO e a porta 
try{

    $conexao = new PDO("mysql:host=$localhost;dbname=$dbname", $user, $pass);
    $conexao -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $stmt = $conexao->prepare('SELECT * FROM cadastro');
    $stmt->execute();
    echo 'ESE Shop - Loja Marca';
}   catch(PDOException $e){
        echo "Erro ao conectar: ".$e->getMessage();
}

?>

<table>
    <thead>
        <tr>
            <th>ID SUAP</th>
            <th>NOME</th>
            <th>EMAIL</th>
            <th>SENHA</th>
            <th>TELEFONE</th>
            <th>CPF</th>
        </tr>
    </thead>

    <tbody>
        <tr>
            <?php foreach ($stmt->fetchall() as $row) {?>

            <td><?php echo $row['idsuap']; ?></td>
            <td><?php echo $row['nome']; ?></td>
            <td><?php echo $row['email']; ?></td>
            <td><?php echo $row['senha']; ?></td>
            <td><?php echo $row['telefone']; ?></td>
            <td><?php echo $row['cpf']; ?></td>
        </tr>
        <?php } ?>
    </tbody>
</table>

