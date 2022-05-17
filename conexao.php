<?php
$servername = "localhost";
$username = "senai2022";
$password = "Teste@12";
$dbname = "db_geral";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

?>