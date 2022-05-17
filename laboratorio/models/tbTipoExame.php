<?php
$sql = "
    SELECT * FROM tb_tipo_exame
";

$stmt = $conn->prepare($sql); //stmt statement (prepara)
$stmt->execute(); //executar o sql
$tbTipoExame = $stmt->fetchAll(); // trazer todos os dados do sql no formato de array

$conn = null; // libero a conexão (disconnect)



