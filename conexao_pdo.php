<?php
$servername = "localhost";
$username = "senai2022";
$password = "Teste@12";
$dbname = "db_geral";

// Create connection

try {
  $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username,$password);
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(PDOException $e) {
  echo "Connection failed: " . $e->getMessage();
}

?>