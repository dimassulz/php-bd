<?php
### CONEXAO via PDO ###
$servername = "localhost";
$username = "";
$password = "";
$dbname = "db_laboratorio";

// Create connection
try {
  $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username,$password);
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); // habilitar a geração erro
} catch(PDOException $e) {
  echo "A conexão com o banco de dados falhou " . $e->getMessage();
}

?>