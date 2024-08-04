<!-- Evitar mensagem de Warnign no site -->
<?php
// Verifica se as chaves existem antes de acessá-las
$idSuap = isset($_POST['IDSuap']) ? $_POST['IDSuap'] : '';
$nome = isset($_POST['nome']) ? $_POST['nome'] : '';
$email = isset($_POST['email']) ? $_POST['email'] : '';
$senha = isset($_POST['senha']) ? $_POST['senha'] : '';
$telefone = isset($_POST['telefone']) ? $_POST['telefone'] : '';
?>

<!-- Alterar Tabela Exemplo -->
                <label for="IDMarca"><p>ID Marca</p></label>
                    <input type="text" name="IDMarca" id="IDMarca" value="<?php echo $CBarra ?>" required><br>

                <label for="titulo"><p>Titulo</p></label>
                    <input type="text" name="titulo" id="titulo" value="<?php echo $titulo ?>" required><br>

                <label for="preco"><p>Preço</p></label>
                    <input type="number" name="preco" id="preco" value="<?php echo $preco ?>" required><br>


<!-- Explicação de Segurança das Senhas -->
<div class="SENHA-EXPLICACAO">
        <!-- Armazenar senhas em texto claro é uma prática insegura, pois se houver uma violação de segurança, os dados dos usuários ficarão expostos. Para proteger as senhas, é recomendado usar uma técnica chamada hashing, que transforma a senha em uma sequência de caracteres aleatórios e irreversíveis.
        Um algoritmo de hashing muito utilizado para esse fim é o bcrypt. Ele adiciona um "sal" (salt) aleatório à senha antes de aplicar o hash, tornando-o ainda mais seguro contra ataques de dicionário e arco-íris.
        Aqui está um exemplo prático de como usar o bcrypt para armazenar senhas em PHP:
        php
        <?php
        // Supondo que o usuário tenha enviado a senha pelo formulário
        $senha = $_POST['senha'];

        // Gera um hash da senha usando bcrypt
        $hash = password_hash($senha, PASSWORD_DEFAULT);

        // Insere o hash no banco de dados
        $sql = "INSERT INTO usuarios (senha) VALUES (:senha)";
        $stmt = $conn->prepare($sql);
        $stmt->bindParam(':senha', $hash);
        $stmt->execute();
        ?>

        Quando o usuário faz login, você pode verificar a senha fornecida comparando-a com o hash armazenado no banco de dados:
        php
        <?php
        // Supondo que o usuário tenha enviado a senha pelo formulário
        $senha = $_POST['senha'];

        // Busca o hash da senha do banco de dados
        $sql = "SELECT senha FROM usuarios WHERE email = :email";
        $stmt = $conn->prepare($sql);
        $stmt->bindParam(':email', $email);
        $stmt->execute();
        $usuario = $stmt->fetch();

        // Verifica se a senha fornecida corresponde ao hash
        if (password_verify($senha, $usuario['senha'])) {
            echo "Login bem-sucedido!";
        } else {
            echo "Senha inválida.";
        }
        ?>

        A função password_hash() gera um hash seguro da senha usando bcrypt. Ela adiciona automaticamente um sal aleatório e seleciona a versão mais forte do algoritmo disponível.
        A função password_verify() compara a senha fornecida com o hash armazenado no banco de dados. Ela lida com a extração do sal e a seleção do algoritmo correto, tornando a verificação simples e segura.
        Ao usar o bcrypt, você não precisa se preocupar com a força do algoritmo ou com a adição de sal. O PHP cuida disso automaticamente para você, garantindo que as senhas sejam armazenadas de forma segura e verificadas corretamente.
        Lembre-se de sempre usar conexões seguras (HTTPS) ao enviar senhas para o servidor para evitar ataques de interceptação. -->
</div>

<?php

require_once('conexao.php');

if(isset($_POST['CadUsurario'])){

    {
        $idsuap = $_POST ['IDSuap'];
        
        $nome = $_POST ['nome'];

        $email = $_POST ['email'];

        $senha = $_POST ['senha'];

        $telefone = $_POST ['telefone'];

        $cpf = $_POST ['cpf'];

        ##codigo SQL
        $sql = "INSERT INTO CadUsuario(nome,idade,email,senha,telefone,cpf) 
        VALUES('$idsuap', '$nome', '$email', '$senha', '$telefone', '$cpf')";
        
        #junta o codigo SQL a conexao do banco
        $sqlcombanco = $conexao->prepare($sql);

        ##executa o SQL no banco de dados
        if($sqlcombanco->execute())
            {
                echo "<strong>OK!</strong> Parabens
                $nome sua conta está Cadastrada!!!";
            }
    }

}
?>


<?php

require_once('conexao.php');

if(isset($_POST['CadProduto'])){

    {
        $CBarra = $_POST ['CBarra'];
        
        $titulo = $_POST ['titulo'];

        $preco = $_POST ['preco'];

        $marcas = $_POST ['marca'];

        $tipo = $_POST ['tipo'];

        $detalhesProduto = $_POST ['detalhesProduto'];

        $tamanhos = $_POST ['tamanhos'];

        ##codigo SQL
        $sql = "INSERT INTO CadProduto(CBarra,titulo,preco,marca,tipo,detalhesProduto,tamanhos) 
        VALUES('$CBarra', '$titulo', '$preco', '$marca', '$tipo', '$detalhesProduto', '$tamanhos')";
        
        #junta o codigo SQL a conexao do banco
        $sqlcombanco = $conexao->prepare($sql);

        ##executa o SQL no banco de dados
        if($sqlcombanco->execute())
            {
                echo "<strong>OK!</strong> Parabens
                $nome seu Produto está Cadastrado na ESE Shop!!!";
            }
    }

}
