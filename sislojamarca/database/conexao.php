<?php
$host = 'localhost';
$user = 'root';
$pass = '';
$dbname = 'sislojamarca';

// Criar a conexão com o BD usando o PDO e a porta 
try{
    $conn = new mysqli($host, $user, $pass, $dbname);
}   catch(mysqli_sql_exception $e) {
    echo 'Erro ao se conectar: '. $e->getMessage();
}
