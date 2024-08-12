<?php

$dsn = "mysql:host=localhost;dbname=sislojamarca";

try {
  $conn = new PDO($dsn, "root", "");
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
  echo "Erro: " . $e->getMessage();
}



